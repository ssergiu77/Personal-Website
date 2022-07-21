<?php

try {
    $db = new PDO("mysql:dbname=website;host=localhost", "root", "" );
} catch(PDOException $e) {
    echo $e->getMessage();
}
