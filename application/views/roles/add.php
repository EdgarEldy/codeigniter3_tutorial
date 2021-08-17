<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add a role</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('roles/add') ?>" method="POST">
                    <div class="form-group">
                        <label>Role name :</label>
                        <input type="text" name="role_name" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('role_name', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.col-->