
<div class="card me-5" style="width:250px">
    <div class="card-header">
        <?php echo $product->getCategory()->getLabel() ?>
        <i class="<?php echo $product->getCategory()->getIcon() ?>"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title">Nome: <?php echo $product->getName() ?></h5>
        <p class="fw-bold">Marca: <?php echo $product->getBrand() ?></p>
        <p class="card-text">Descrizione: <?php echo $product->getDescription() ?> </p>
        <p>Ingredienti: <?php echo $product->listIngredients() ?></p>
        <p>Prezzo: € <?php echo $product->getPrice() ?></p>
        <p>Scadenza: <?php echo $product->getExpiration() ?></p>
    </div>
</div>

