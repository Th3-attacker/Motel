<?php
if (isset($_SESSION['is_connected'])
    && $_SESSION['ROLE'] == 0) {
    Reservation();
    header('location:?page=home');
} else {
    header('location:?page=405');
}
