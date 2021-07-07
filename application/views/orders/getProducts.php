<!-- Get products from ajax -->
<option value="">Select a product...</option>
<?php foreach ($products as $product) : ?>
    <option value="<?= $product['id'] ?>"><?= $product['product_name'] ?></option>
<?php endforeach ?>