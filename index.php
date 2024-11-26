<?php
require_once 'templates/header.php';
require_once 'libs/listing.php';


$listings = getListings();

$categories = [
    ["name" => "jeux vidéos", "icon" => "controller"],
    ["name" => "vetements", "icon" => "backpack"],
    ["name" => "meuble", "icon" => "lamp"],
]
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="/assets/images/logo-okaz.png" class="d-block mx-lg-auto img-fluid" alt="Logo Okaz" width="400" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bienvenue sur le site de petite annonces Okaz</h1>
        <p class="lead">Retrouvez des centaines de petites annonces et rejoingnez la communauté en postant vos propres annonces sur le site</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
    </div>
</div>

<div class="row text-center">
    <h2>Les dernières annonces</h2>
    <?php foreach ($listings as $listing) {
        require 'templates/listing_part.php';
    }   ?>

</div>

<div class="py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Les catégories</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

        <?php
        foreach ($categories as $key => $category) {
            require 'templates/category_part.php';
        }
        ?>
    </div>
</div>

<?php
require_once 'templates/footer.php';
?>