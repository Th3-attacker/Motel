<?php require_once VIEWS . '/partials/header.php';?>

<div class="container mt-5 mb-5 d-flex justify-content-center" >
  <div class="card" style="width: 18rem;">
    <div class="card-header text-center">
        <h1 class="card-title">FACTURE</h1>
    </div>
    <div class="card-body">
  <ul class="mt-5 mb-5">
      <li class="d-flex flex-row align-items-center justify-content-start mt-5">
        <img src="./public/images/check.png" alt="">
        <span>Number of Person - 2</span>
      </li>
      <li class="d-flex flex-row align-items-center justify-content-start mt-5">
        <img src="./public/images/check.png" alt="">
        <span>Remaining Rooms : 1</span>
      </li>
    </ul>
    <div class="rooms_price">15/<span>Night</span></div>
    </div>
    <div class="card-footer text-center">
      <a href="#" class="btn btn-primary btn-lg">Valider</a>
    </div>
  </div>
</div>
<?php require_once VIEWS . '/partials/footer.php';
