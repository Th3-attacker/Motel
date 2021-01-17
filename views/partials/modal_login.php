<?php require_once './database/Database.php'?>
<?php
if (!empty($_POST)) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        session_start();
        $_SESSION['PROFILE'] = $_POST['username'];
        $requette = 'SELECT * FROM users WHERE username = ? and password = ?';
        $result = $db->prepare($requette);
        $result->execute([$username, $password]);
        if ($user = $result->fetch()) {
            echo 'ok';
        } else {
            echo 'non ok';
        }
    }
}

?>
<a class="navbar-link" data-toggle="modal" data-target="#exampleModalLong">
  Login
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" class="form-groupe">
          <div class="row-md-6">
              <label for="">Username</label>
              <input type="text" name="username" id="" class="form-control" required>
              <label for="">password</label>
              <input type="password" name="password" id="" class="form-control" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit"  name="submit" class="btn btn-primary">Connecter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
