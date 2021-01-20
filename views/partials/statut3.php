<?php

require_once '../../database/Database.php';

$id = $_GET['id_reserve'];
$statut = "DELETE FROM reservations  WHERE id_reserve= ?";
$requette = $db->prepare($statut);
if ($requette->execute([$id])) {
    header('location:?page=home');
}
