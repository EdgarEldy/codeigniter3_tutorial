<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Customers</div>
        <div class="panel-body">
            <div>
                <?php if ($this->session->flashdata('customer_saved')) : ?>
                    <?php echo '<p class="alert alert-success w-100 h-100">' . $this->session->flashdata('customer_saved') . '</p>'; ?>
                <?php endif; ?>

                <!-- Customer updated flash message -->
                <?php if ($this->session->flashdata('customer_updated')) : ?>
                    <?php echo '<p class="alert alert-success w-100 h-100">' . $this->session->flashdata('customer_updated') . '</p>'; ?>
                <?php endif; ?>

                <!-- customer_removed flash message -->
                <?php if ($this->session->flashdata('customer_removed')) : ?>
                    <?php echo '<p class="alert alert-danger w-100 h-100">' . $this->session->flashdata('customer_removed') . '</p>'; ?>
                <?php endif; ?>
            </div>
            <a href="<?= base_url('customers/add') ?>" class="btn btn-primary">New</a>
            <table data-toggle="table" data-url="" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) : ?>
                        <tr>
                            <td><?= $customer['id'] ?> </td>
                            <td><?= $customer['first_name'] ?></td>
                            <td><?= $customer['last_name'] ?></td>
                            <td><?= $customer['tel'] ?></td>
                            <td><?= $customer['email'] ?></td>
                            <td><?= $customer['address'] ?></td>
                            <td>
                                <div class="card-footer">
                                    <a href="<?= base_url('customers/edit/' . $customer['id']) ?>" class="btn btn-primary">Edit</a>
                                    <form action="<?= base_url('customers/delete/' . $customer['id']) ?>" method="post">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this customer ?')" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>