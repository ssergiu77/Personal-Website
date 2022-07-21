<?php 

include("../Controllers/ProfileUserController.php");

$data = [
    "id" =>  $_POST['id'],
    "first_name" =>  $_POST['first_name'],
    "last_name" =>  $_POST['last_name'],
    "username" =>  $_POST['username'],
    "email" =>  $_POST['email'],
    "photo_url" =>  $_POST['photo_url'],
    "password" =>  $_POST['password'],
];

$user = [];

foreach ($data as $key => $value) {
    if ($value != "") {
        $user[$key] = $value;
    }
}

$user = new ProfileUser($user);
$user->update();