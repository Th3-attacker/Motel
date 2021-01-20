
<?php

use App\Core\Database;

function Login()
{
    if (!empty($_POST)) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            $_SESSION['PROFILE'] = $_POST['username'];
            $requette = 'SELECT * FROM users WHERE username = ? and password = ?';
            $result = Database::open()->prepare($requette);
            $result->execute([$username, $password]);
            if ($user = $result->fetch()) {
                $_SESSION['is_connected'] = true;
                $_SESSION['ROLE'] = $user->role;
                $_SESSION['id'] = $user->id;
                header('location:?page=home');
            } else {
                header('location:?page=405');
            }
        }
    }
}

function Reservation()
{
    if (isset($_POST)) {
        if (!empty($_POST['date_debut'])
            && !empty($_POST['date_fin'])
            && !empty($_POST['chambre'])) {
            $date_debut = date("Y/m/d", strtotime($_POST['date_debut']));
            $date_fin = date("Y/m/d", strtotime($_POST['date_fin']));
            $chambre = $_POST['chambre'];
            $id_guest = $_SESSION['id'];
            $reserver = "INSERT INTO reservations ( date_debut, date_fin, id_guest, id_room )
                        VALUES  ('$date_debut' , '$date_fin' ,$id_guest, $chambre)";
            Database::open()->prepare($reserver)->execute();
            Database::close();
        }
    }
}
