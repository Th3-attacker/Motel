<?php require_once VIEWS . '/partials/header.php'?>
<?php
require_once './database/Database.php';
?>
<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-md-4">
      <form method="POST" action="?page=reservation">
        <input type="hidden"  value="15" />
        <input type="hidden" value="12" />
        <div class="card">
          <img class="card-img-top" src="./public/images/1.jpg" alt="Room image description"/>
          <div class="card-body">
            <div class="rooms_title"><h2>Wing A Standard Room</h2></div>
            <div class="rooms_text">
              <p>Without TV</p>
            </div>
            <div class="rooms_list">
              <ul>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="" />
                  <span>Number of Person - 2</span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="" />
                    <span>Remaining Rooms :1</span>
                </li>
              </ul>
            </div>
            <div class="rooms_price">15/<span>Night</span></div>
            <div class="form-group">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <input type="submit" class="button rooms_button" id="booknow" name="booknow" onclick="return validateBook();" value="Book Now!"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
     <div class="col-md-4">
      <form method="POST" action="?page=reservation">
        <input type="hidden"  value="15" />
        <input type="hidden" value="12" />
        <div class="card">
          <img class="card-img-top" src="./public/images/3.jpg" alt="Room image description"/>
          <div class="card-body">
            <div class="rooms_title "><h2>Chambre  <br> Complexe</h2></div>
            <div class="rooms_text">
              <p>Avec Climatiseur et  TV</p>
            </div>
            <div class="rooms_list">
              <ul>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="" />
                  <span>Nombre de  Personne - 4</span>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <img src="images/check.png" alt="" />
                    <span>Chambre Numero:2</span>
                </li>
              </ul>
            </div>
            <div class="rooms_price">1500MRO/<span>Night</span></div>
            <div class="form-group">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <input type="submit" class="button rooms_button" id="booknow" name="booknow" onclick="return validateBook();" value="Book Now!"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>
</div>
<?php require_once VIEWS . '/partials/footer.php'?>
