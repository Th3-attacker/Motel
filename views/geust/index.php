<?php

use App\Core\Database;

require_once VIEWS . DS . 'partials/header.php';
$programmer = "SELECT id_reserve, date_debut , date_fin, username, name
FROM reservations INNER JOIN Rooms on Rooms.id = reservations.id_room
INNER JOIN users on users.id = reservations.id_guest WHERE statut = 0";
$valider = "SELECT id_reserve, date_debut , date_fin, username, name
FROM reservations INNER JOIN Rooms on Rooms.id = reservations.id_room
INNER JOIN users on users.id = reservations.id_guest WHERE statut = 1";
$attente = "SELECT id_reserve, date_debut , date_fin, username, name
FROM reservations INNER JOIN Rooms on Rooms.id = reservations.id_room
INNER JOIN users on users.id = reservations.id_guest WHERE statut = 2";

$programe = Database::open()->prepare($programmer);
$valide = Database::open()->prepare($valider);
$attent = Database::open()->prepare($attente);
$result1 = $programe->execute();
$result2 = $valide->execute();
$result3 = $attent->execute();
Database::close();
?>
    <div class="container mt-5 mb-5">
      <nav class="d-flex justify-content-center">
        <div
          class="d-grid gap-3 nav nav-tabs"
          id="nav-tab"
          role="tablist"
        >
          <a
            href="#nav-valide"
            class="btn btn-success nav-link active"
            id="nav-valide-tab"
            data-toggle="tab"
            role="tab"
            aria-controls="nav-valide"
            aria-selected="true"
          >
             Accepter
          </a>
          <a
            style="margin-left:15px;"
            href="#nav-attent"
            class="btn btn-danger nav-link"
            id="nav-attent-tab"
            data-toggle="tab"
            role="tab"
            aria-controls="nav-attent"
            aria-selected="true"
          >
             Rejeter
          </a>
          <a
            style="margin-left:15px;"
            href="#nav-programmer"
            class="btn btn-warning nav-link"
            id="nav-programmer-tab"
            data-toggle="tab"
            role="tab"
            aria-controls="nav-programmer"
            aria-selected="true"
          >
             Envoyer
          </a>
        </div>
      </nav>
      <div class="tab-content " id="nav-tabContent">
        <div
          class="tab-pane fade show active"
          id="nav-valide"
          role="tabpanel"
          aria-labelledby="nav-valide-tab"
        >
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id_reservaation</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th scope="col">Client</th>
                <th scope="col">type Chambre</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($valide as $val): ?>
              <tr>
                <th scope="row"><?=$val->id_reserve;?></th>
                <td><?=$val->date_debut?></td>
                <td><?=$val->date_fin?></td>
                <td><?=$val->username;?></td>
                <td><?=$val->name?></td>
              </tr>
                <?php endforeach;?>
            </tbody>
          </table>
        </div>
        <div
          class="tab-pane fade "
          id="nav-attent"
          role="tabpanel"
          aria-labelledby="nav-attent-tab"
        >
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id_reservaation</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th scope="col">Client</th>
                <th scope="col">type Chambre</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($attent as $att): ?>
              <tr>
                <th scope="row"><?=$att->id_reserve;?></th>
                <td><?=$att->date_debut?></td>
                <td><?=$att->date_fin?></td>
                <td><?=$att->username;?></td>
                <td><?=$att->name?></td>
              </tr>
                <?php endforeach;?>
            </tbody>
          </table>
        </div>
        <div
          class="tab-pane fade"
          id="nav-programmer"
          role="tabpanel"
          aria-labelledby="nav-programmer-tab"
        >
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id_reservaation</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th scope="col">Client</th>
                <th scope="col">type Chambre</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($programe as $prog): ?>
              <tr>
                <th scope="row"><?=$prog->id_reserve;?></th>
                <td><?=$prog->date_debut?></td>
                <td><?=$prog->date_fin?></td>
                <td><?=$prog->username;?></td>
                <td><?=$prog->name?></td>
                <td class="gap-2 d-flex justify-content-md-center">
                <form action="?page=home" method="GET">
                  <a href="./views/partials/statut3.php?id_reserve=<?=$prog->id_reserve;?>" type="submit" name="submit"  class="btn btn-danger">Annuler</a>
                </form>
                </td>
              </tr>
                <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
<?php require_once VIEWS . DS . 'partials/footer.php'?>
