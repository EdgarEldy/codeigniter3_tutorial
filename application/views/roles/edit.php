<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Edit a role</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('roles/update') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $role['id'] ?>">
                    <div class="form-group">
                        <label>Role name :</label>
                        <input type="text" name="role_name" class="form-control" class="is-danger" placeholder="" value="<?= $role['role_name'] ?>">
                        <?= form_error('role_name', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.col-->