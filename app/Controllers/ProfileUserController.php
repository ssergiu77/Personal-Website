<?php

include("../Database/Database.php");

class ProfileUser {
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function update()
    {
        try {
            $user = new Database($this->data);
            $user->update();
        } catch (\Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}