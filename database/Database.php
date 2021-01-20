<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=motel', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
}
