<?php

include('Connect.php');

$users = "users";

$columns = "id INT( 11 ) AUTO_INCREMENT PRIMARY KEY, first_name VARCHAR( 50 ) NOT NULL, last_name VARCHAR( 250 ) NOT NULL, username VARCHAR( 150 ) NOT NULL, email VARCHAR( 150 ) NOT NULL, photo_url VARCHAR( 150 ) NOT NULL, password VARCHAR( 150 ) NOT NULL";

$createTable = $db->exec("CREATE TABLE IF NOT EXISTS $users ($columns)");