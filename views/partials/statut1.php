<?php

require_once '../../database/Database.php';

$id = $_GET['id_reserve'];
$statut = "UPDATE reservations SET statut = ? WHERE id_reserve= ?";
$requette = $db->prepare($statut);
$requette->execute([1, $id]);
header('location:?page=admin');
