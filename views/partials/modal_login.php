<?php
Login();
?>
<a class="navbar-link btn btn-small btn-primary d-flex justify-content-end" data-toggle="modal" data-target="#exampleModalLong">
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
            <a type="submit" class="btn btn-secondary"  href="?page=register">S'inscrire</a>
            <button type="submit"  name="submit" class="btn btn-primary">Connecter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
