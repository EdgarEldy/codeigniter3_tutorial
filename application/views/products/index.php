<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Products</div>
        <div class="panel-body">
            <a href="<?= base_url('products/add') ?>" class="btn btn-primary">New</a>
            <?php if (!empty($products)) : ?>
            <table data-toggle="table" data-url="" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category name</th>
                        <th>Product name</th>
                        <th>Unit price</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <td><?= $product['id']; ?> </td>
                            <td><?= $product['category_name']; ?></td>
                            <td><?= $product['product_name']; ?></td>
                            <td><?= $product['unit_price']; ?></td>
                            <td>
                                <div class="card-footer">
                                    <a href="<?= base_url('products/edit/' . $product['id']) ?>" class="btn btn-primary">Edit</a>
                                    <form action="<?= base_url('products/delete/' . $product['id']) ?>" method="post">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product ?')" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else : ?>
            <p class="h1 text-center text-secondary mt-5 mb-5">
                No products... Please create one. <br>
            </p>
            <?php endif; ?>
        </div>
    </div>
</div>