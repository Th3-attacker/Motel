<?php

try {
    $db = new PDO('mysql:host=database;dbname=motel', 'root', 'tiger');
    return $db;
} catch (PDOException $e) {
    echo $e->getMessage();
}
