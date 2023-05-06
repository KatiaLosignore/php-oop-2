<div class="card me-5" style="width:1000px">
    <div class="card-header">
        <?php echo $product->getCategory()->getLabel() ?>
        <i class="<?php echo $product->getCategory()->getIcon() ?>"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title">Nome: <?php echo $product->getName() ?></h5>
        <p class="card-text fw-bold">Marca: <?php echo $product->getBrand() ?> </p>
        <p class="card-text">Descrizione: <?php echo $product->getDescription() ?> </p>
        <p>Prezzo: € <?php echo $product->getPrice() ?></p>
        <p>Colore: <?php echo $product->getColor() ?></p>
        <p>Dimensione: <?php echo $product->getSize() ?></p>
    </div>
</div>