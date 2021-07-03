<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Orders</div>
        <div class="panel-body">
            <a href="#" class="btn btn-primary">New</a>
            <?php if (!empty($orders)) : ?>
                <table data-toggle="table" data-url="" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Product name</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= $order['first_name'] ?></td>
                                <td><?= $order['last_name'] ?></td>
                                <td><?= $order['product_name'] ?></td>
                                <td><?= $order['unit_price'] ?></td>
                                <td><?= $order['qty'] ?></td>
                                <td><?= $order['total'] ?></td>
                                <td>
                                    <div class="card-footer">
                                        <a href="<?= base_url('orders/edit/' . $order['id']) ?>" class="btn btn-primary">Edit</a>
                                        <form action="<?= base_url('orders/delete/' . $order['id']) ?>" method="post">
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this order ?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="h1 text-center text-secondary mt-5 mb-5">
                    No orders. Please create one... <br>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>