<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add an order</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('orders/add') ?>" method="POST">
                    <div class="form-group">
                        <label for="">Select a customer :</label>
                        <select name="customer_id" id="customer_id" class="form-control" class="is-danger">
                            <option value="">Select a customer...</option>
                            <?php foreach ($customers as $customer) : ?>
                                <option value="<?= $customer['id'] ?>"><?= $customer['first_name'] . " " . $customer['last_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('customer_id', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label for="categories">Select a category </label>
                        <select name="category_id" id="category_id" class="form-control" class="is-danger">
                            <option value="">Select a category...</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('category_id', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Select a product :</label>
                        <select name="product_id" id="product_id" class="form-control" class="is-danger">
                            <option value="">Select a product...</option>
                        </select>
                        <?= form_error('product_id', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label for="unit_price">Unit price :</label>
                        <input type="text" name="unit_price" id="unit_price" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('unit_price', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label>Qty :</label>
                        <input type="text" name="qty" id="qty" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('qty', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label>Total :</label>
                        <input type="text" name="total" id="total" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('total', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.col-->