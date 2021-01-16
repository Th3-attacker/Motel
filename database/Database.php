<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=motel', 'root', '');
    return $db;
} catch (PDOException $e) {
    echo $e->getMessage();
}
