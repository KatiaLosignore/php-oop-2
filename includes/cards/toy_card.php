<div class="card me-5" style="width:250px">
    <div class="card-header">
        <?php echo $product->getCategory()->getLabel() ?>
        <i class="<?php echo $product->getCategory()->getIcon() ?>"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title">Nome: <?php echo $product->getName() ?></h5>
        <p class="card-text fw-bold">Marca: <?php echo $product->getBrand() ?> </p>
        <p class="card-text">Description: <?php echo $product->getDescription() ?> </p>
        <p>Prezzo: € <?php echo $product->getPrice() ?></p>
        <p>Colore: <?php echo $product->getColor() ?></p>
        <p>Materiali: <?php echo $product->listMaterials() ?></p>
        <p>Forma: <?php echo $product->getForm() ?></p>
    </div>
</div>