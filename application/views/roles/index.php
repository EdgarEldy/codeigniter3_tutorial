<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Product roles</div>
        <div class="panel-body">
            <a href="#<?= base_url('categories/add') ?>" class="btn btn-primary">New</a>
            <table data-toggle="table" data-url="" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Role name</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($roles as $role) : ?>
                        <tr>
                            <td><?= $role['id'] ?> </td>
                            <td><?= $role['role_name'] ?></td>
                            <td>
                                <div class="card-footer">
                                    <a href="<?= base_url('roles/edit/' . $role['id']) ?>" class="btn btn-primary">Edit</a>
                                    <form action="<?= base_url('roles/delete/' . $role['id']) ?>" method="post">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this role ?')" class="btn btn-danger btn-sm">Delete</button>
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