<?php

include("../Controllers/LoginUserController.php");

$user = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

$user = new LoginUser($user);
$user->login();