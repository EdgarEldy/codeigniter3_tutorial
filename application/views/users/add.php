<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">Add a user</div>
		<div class="panel-body">
			<div class="col-md-6">
				<form role="form" action="<?= base_url('users/add') ?>" method="post">
					<div class="form-group">
						<label>Role name :</label>
						<select name="role_id" id="" class="form-control">
							<option value="">Select a role...</option>
							<?php foreach($roles as $role) : ?>
								<option value="<?= $role['id'] ?>"><?= $role['role_name'] ?></option>
							<?php endforeach ?>
						</select>
						<?= form_error('role_id', '<p class="alert alert-danger">', '</p>') ?>
					</div>
					<div class="form-group">
						<label>First name :</label>
						<input type="text" name="first_name" class="form-control is-danger" placeholder="" value="">
						<?= form_error('first_name', '<p class="alert alert-danger">', '</p>') ?>
					</div>
					<div class="form-group">
						<label>Last name :</label>
						<input type="text" name="last_name" class="form-control is-danger" placeholder="" value="">
						<?= form_error('last_name', '<p class="alert alert-danger">', '</p>') ?>
					</div>
					<div class="form-group">
						<label>Email :</label>
						<input type="text" name="email" class="form-control is-danger" placeholder="" value="">
						<?= form_error('email', '<p class="alert alert-danger">', '</p>') ?>
					</div>
					<div class="form-group">
						<label>Password :</label>
						<input type="password" name="password" class="form-control is-danger" placeholder="" value="">
						<?= form_error('password', '<p class="alert alert-danger">', '</p>') ?>
					</div>
					<div class="form-group">
						<label>Confirm password :</label>
						<input type="password" name="confirm_password" class="form-control is-danger" placeholder="" value="">
						<?= form_error('confirm_password', '<p class="alert alert-danger">', '</p>') ?>
					</div>
					<button type="submit" id="submit" class="btn btn-primary">Save</button>
					<button type="reset" class="btn btn-default">Reset</button>
				</form>
			</div>
		</div>
	</div>
</div><!-- /.col-->
