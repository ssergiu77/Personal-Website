<?php

try {
    $db = new PDO("mysql:dbname=epiz_32214102_resume;host=sql311.epizy.com", "epiz_32214102", "jmiW0Tw2tPkkTrF" );
} catch(PDOException $e) {
    echo $e->getMessage();
}