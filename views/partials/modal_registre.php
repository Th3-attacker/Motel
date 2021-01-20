<?php

use App\Core\Database;

require_once VIEWS . DS . './partials/header.php'?>
<?php
require_once './database/Database.php';
if (!empty($_POST['submit'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom'])
        && !empty($_POST['numero']) && !empty($_POST['email'])
        && !empty($_POST['username']) && !empty($_POST['password'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $sql = "INSERT INTO users SET nom = ?, prenom=?, numero=?, email=? , username=? , password=?";
        Database::open()->prepare($sql)->execute([$nom, $prenom, $numero, $email, $username, $password]);
        header('location:?page=home');
    }
}

?>
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="card " style="width: 30rem;">
        <div class="card-header">
        <h4 class="text-center">Register</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nom</label>
                        <input type="text" name="nom"  class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom"  class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">numero</label>
                        <input type="number" name="numero"  class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="">email</label>
                        <input type="email" name="email"  class="form-control" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">username</label>
                        <input type="text" name="username"  class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label for="">password</label>
                        <input type="password" name="password"  class="form-control" >
                    </div>
                </div>
                <input type="submit" value="Enregistrer" name="submit" class=" text-center mt-4 btn btn-lg btn-primary" >
            </form>
        </div>
    </div>
</div>
<?php require_once VIEWS . DS . './partials/footer.php'?>