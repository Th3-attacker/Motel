<?php require_once VIEWS . '/partials/header.php';?>
<?php
require_once './database/Database.php';
$reservation= 'SELECT * FROM Room '
?>

<div class="contanier pl-5 mt-5 mb-5">
    <form action="?page=facture" method="POST">
        <div class="row text-center">
            <div class="col-md-2 form-groupe">
                <label for="">date debut</label>
                <input type="date" name="" id="" class="form-control">
            </div>
            <div class="col-md-2 form-groupe">
                <label for="">date fin</label>
                <input type="date" name="" id="" class="form-control">
            </div>
            <div class="col-md-2 form-groupe">
                <label for="">personne</label>
                <input type="number" name="" id="" class="form-control">
            </div>
            <div class="col-md-2 form-groupe">
                <label for="">chambre</label>
                <select name="" id="" class="form-control">
                    <option value="<?=$p;?>">Simple</option>
                    <option value="<?=$p;?>">decorre</option>
                </select>
            </div>
            <div class="col-md-2 from-groupe mb-2 mt-4">
                <button class="form-control btn btn-warning">Reserver</button>
            </div>
        </div>
</form>
</div>


<?php require_once VIEWS . '/partials/footer.php';?>
