<?php
require_once 'templates/header.php';

require_once 'libs/listing.php';


$listings = getListings();
?>

<div class="row">
    <h1>Les Annonces</h1>
</div>

<div class="row">
    <div class="col-md-3">
        <form action="" method="get">
            <h2>Filtres</h2>
            <div class="p-3 border-bottom">
                <input type="text" name="search" id="search" class="form-control" placeholder="rechercher">
            </div>
            <div class="p-3 border-bottom">
                <label for="price">Prix</label>
                <div class="input-group">
                    <input type="number" name="min_price" id="min_price" class="form-control" placeholder="prix minimum">
                    <span class="input-group-text">€</span>
                </div>
                <div class="input-group">
                    <input type="number" name="max" id="max" class="form-control" placeholder="prix maximum">
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-100">Rechercher</button>
            </div>
        </form>
    </div>

    <div class="col-md-9">
        <div class="row">
            <?php foreach ($listings as $listing) {
                require 'templates/listing_part.php';
            }   ?>
        </div>
    </div>




    <?php
    require_once 'templates/footer.php';
    ?>