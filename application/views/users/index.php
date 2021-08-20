<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Users</div>
        <div class="panel-body">
            <a href="<?= base_url('users/add') ?>" class="btn btn-primary">New</a>
            <?php if (!empty($users)) : ?>
                <table data-toggle="table" data-url="" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Registered at</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user['id']; ?> </td>
                                <td><?= $user['first_name']; ?></td>
                                <td><?= $user['last_name']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td><?= $user['role_name']; ?></td>
                                <td><?= $user['created_at']; ?></td>
                                <td>
                                    <div class="card-footer">
                                        <form action="<?= base_url('users/delete/' . $user['id']) ?>" method="post">
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user ?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p class="h1 text-center text-secondary mt-5 mb-5">
                    No users... Please create one. <br>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>