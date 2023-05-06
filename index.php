<?php 
include_once __DIR__ .'/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">

   <?php include __DIR__ .'/includes/head.php' ?>

    <body class="bg-info-subtle">
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 fs-3 text-primary fw-bold">E-commerce Cat and Dog</span>
        </div>
        </nav>
        <main>
            <div class="container h-50">
                <section id="food-products">
                    <h2 class="mt-4">Food <i class="<?php echo FoodProduct::$icon ?>"></i></h2>
                    <div class="d-flex">
                        <?php foreach($food_products as $product) {
                            include __DIR__ .'/includes/cards/food_card.php';
                        } ?>
                    </div>
                </section>

                <section id="kennel-products">
                    <h2 class="mt-4">Kennel <i class="<?php echo KennelProduct::$icon ?>"></i></h2>
                    <div class="d-flex">
                        <?php foreach($kennel_products as $product) {
                            include __DIR__ .'/includes/cards/kennel_card.php';
                        } ?>
                    </div>
                </section>


                <section id="toy-products">
                    <h2 class="mt-4">Toy <i class="<?php echo ToyProduct::$icon ?>"></i></h2>
                    <div class="d-flex">
                        <?php foreach($toy_products as $product) {
                            include __DIR__ .'/includes/cards/toy_card.php';
                        } ?>
                    </div>
                </section>

                
                
            </div>
        </main>
        <hr>
    </body>
</html>

