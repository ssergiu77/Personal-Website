<?php

include("../Controllers/RegisterUserController.php");

$user = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'username' => $_POST['username'], 
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'repeat_password' => $_POST['repeat_password'],
];

$user = new RegisterUser($user);
$user->save();