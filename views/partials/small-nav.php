<?php require_once './database/Database.php';?>
<?php

?>
<nav class="navbar navbar-dark bg-dark ">
  <div class="container-fluid">
  <?php if (!isset($_SESSION['is_connected'])): ?>
      <?php require_once VIEWS . '/partials/modal_login.php';?>
  <?php else: ?>
      <a href="?page=logout" class="d-flex justify-content-start btn btn-small btn-danger">logout</a>
      <?php if ($_SESSION['ROLE'] == 1): ?>
      <a href="?page=admin" class="d-flex justify-content-end btn btn-small btn-primary">Reservation</a>
      <?php elseif ($_SESSION['ROLE'] == 0): ?>
      <a href="?page=geust" class="d-flex justify-content-end btn btn-small btn-primary">Mes Reservation</a>
      <?php endif?>
    <?php endif?>
    </div>

</nav>
<!-- Modal -->
