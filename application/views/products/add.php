  <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">Add a product</div>
          <div class="panel-body">
              <div class="col-md-6">
                  <form role="form" action="<?= base_url('products/add') ?>" method="post">
                      <div class="form-group">
                          <label>Category name :</label>
                          <select name="category_id" id="" class="form-control">
                          <option value="">Select a category...</option>
                          <?php foreach($categories as $category) : ?>
                          <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                          <?php endforeach ?>
                          </select>
                          <?= form_error('category_id', '<p class="alert alert-danger">', '</p>') ?>
                      </div>
                      <div class="form-group">
                          <label>Product name :</label>
                          <input type="text" name="product_name" class="form-control" class="is-danger" placeholder="" value="">
                          <?= form_error('product_name', '<p class="alert alert-danger">', '</p>') ?>
                      </div>
                      <div class="form-group">
                          <label>Unit price :</label>
                          <input type="text" name="unit_price" class="form-control" class="is-danger" placeholder="" value="">
                          <?= form_error('unit_price', '<p class="alert alert-danger">', '</p>') ?>
                      </div>
                      <button type="submit" id="submit" class="btn btn-primary">Save</button>
                      <button type="reset" class="btn btn-default">Reset</button>
                  </form>
              </div>
          </div>
      </div>
  </div><!-- /.col-->