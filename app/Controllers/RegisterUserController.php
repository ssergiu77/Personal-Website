<?php 

include("../Database/Database.php");

class RegisterUser {
    protected $user;

    public function __construct($user) 
    {
        $this->user = $user;
    }

    public function save()
    {
        try {
            $user = new Database($this->user);
            $user->save();
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}