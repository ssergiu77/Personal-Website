<?php 

include("../Database/Database.php");

class LoginUser {
    protected $user;

    public function __construct($user) 
    {
        $this->user = $user;
    }

    public function login()
    {
        try {
            $user = new Database($this->user);
            $user->login();
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}