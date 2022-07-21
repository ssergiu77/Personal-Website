<?php


class Database {
    protected $data;

    public function __construct($data)
    { 
        $this->data = $data;
    }

    public function save()
    {

        include('Connect.php');

        $data = [
            'first_name' => $this->data["first_name"],
            'last_name' => $this->data["last_name"],
            'username' => $this->data["username"],
            'email' => $this->data["email"],
            'password' => md5($this->data["password"])
        ];

        $users = $this->checkUsers();

        if ($users) {
            foreach ($users as $user) {
                if (in_array($data['first_name'], $user)) {
                    header("Location: ../../views/auth/RegisterAuth.php");
                    exit;
                }
    
                if (in_array($data['last_name'], $user)) {
                    header("Location: ../../views/auth/RegisterAuth.php");
                    exit;
                }
    
                if (in_array($data['email'], $user)) {
                    header("Location: ../../views/auth/RegisterAuth.php");
                    exit;
                }
            }
        }

        if ($data['password'] != md5($this->data['repeat_password'])) {
            header("Location: ../../views/auth/RegisterAuth.php");
            exit;
        }

        $sql = "INSERT INTO users (first_name, last_name, username, email, password) VALUES (:first_name, :last_name, :username, :email, :password)";
        $db->prepare($sql)->execute($data);
        header("Location: ../../views/auth/LoginAuth.php");
    }

    public function login()
    {
        $data = [
            'email' => $this->data["email"],
            'password' => md5($this->data["password"])
        ];
        $users = $this->getUserFromDatabaseByEmail($data['email']);

        if (!in_array($data['email'], $users)) {
            header("Location: ../../views/auth/RegisterAuth.php");
            exit;
        }

        if (!in_array($data['password'], $users)) {
            header("Location: ../../views/auth/RegisterAuth.php");
            exit;
        }
        

        $user = $this->getUserFromDatabaseByEmail($data['email']);
        session_start();

        $_SESSION['data'] = [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'full_name' => $user['first_name'] . " " . $user['last_name'],
            'username' => $user['username'] ?? "N/A",
            'photo_url' => $user['photo_url'] ?? "N/A",
            'email' => $user['email'],
        ];
        header('location: ../../index.php');
    }

    public function update()
    {
        include('Connect.php');

        $verifyData = $this->data;
        unset($verifyData['id']);

        if (!$verifyData) {
            header("Location: ../../views/profile/profile.php");
            exit;
        }

        $sql = "UPDATE users SET ";
        foreach ($verifyData as $key => $value) {
            $sql.= $key . "=:" . $key . ", ";
        }
        $sql.= "WHERE id=:id;";
        $sql = str_replace(", WHERE", " WHERE", $sql);


        $stmt= $db->prepare($sql);
        $stmt->execute($this->data);

        session_start();

        $user = $this->getUserFromDatabaseById($this->data['id']);
        
        $_SESSION['data'] = [
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'full_name' => $user['first_name'] . " " . $user['last_name'],
            'username' => $user['username'] ?? "N/A",
            'photo_url' => $user['photo_url'] ?? "N/A",
            'email' => $user['email'],
        ];

        header("Location: ../../views/profile/profile.php");
    }
    
    public function checkUsers()
    {
        include('Connect.php');

        $sql = "SELECT * FROM users";
        $stmt = $db->prepare($sql);
        try {
            if ($stmt->execute())
            {
                $raw_column_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($raw_column_data) {
                    foreach($raw_column_data as $outer_key => $value)
                    {
                        $users[] = $value;
                    }
                return $users;
                }
            }
        }
        catch (Exception $e)
        {
            var_dump($e->getMessage());
        }
    }

    public function getUserFromDatabaseByEmail($key)
    {
        include('Connect.php');
        $stmt = $db->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute(['email' => $key]); 
        $user = $stmt->fetch();

        if (!$user) {
            header("Location: ../../views/auth/RegisterAuth.php");
            exit;
        }

        return $user;
    }

    public function getUserFromDatabaseById($key)
    {
        include('Connect.php');
        $stmt = $db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id' => $key]); 
        $user = $stmt->fetch();

        if (!$user) {
            header("Location: ../../views/auth/RegisterAuth.php");
            exit;
        }

        return $user;
    }
}