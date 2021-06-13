<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">Add a new customer</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form role="form" action="<?= base_url('customers/add') ?>" method="POST">
                    <div class="form-group">
                        <label>First name :</label>
                        <input type="text" name="first_name" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('first_name', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label>Last name :</label>
                        <input type="text" name="last_name" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('last_name', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label>Tel :</label>
                        <input type="text" name="tel" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('tel', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email" name="email" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('email', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <input type="text" name="address" class="form-control" class="is-danger" placeholder="" value="">
                        <?= form_error('address', '<p class="alert alert-danger">', '</p>') ?>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /.col-->