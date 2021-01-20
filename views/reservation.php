<?php
use App\Models\Room;

require_once VIEWS . '/partials/header.php';
$rooms = Room::all();
?>

<div class="contanier pl-5 mt-5 mb-5  justify-content-center">
    <form action="?page=facture" method="POST">
        <div class="row text-center">
            <div class="col-md-2 form-groupe">
                <label for="">date debut</label>
                <input type="date" name="date_debut" id="" class="form-control">
            </div>
            <div class="col-md-2 form-groupe">
                <label for="">date fin</label>
                <input type="date" name="date_fin" id="" class="form-control">
            </div>
            <div class="col-md-2 form-groupe">
                <label for="">chambre</label>
                <select name="chambre" id="" class="form-control">
                <?php foreach ($rooms as $room): ;?>
								                    <option value="<?=$room->id;?>"><?=$room->name;?></option>
								                    <?php endforeach;?>
                </select>
            </div>
            <div class="col-md-2 from-groupe mb-2 mt-4">
                <button class="form-control btn btn-warning" type="submit" name="submit">Reserver</button>
            </div>
        </div>
</form>
</div>


<?php require_once VIEWS . '/partials/footer.php';?>
