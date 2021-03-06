  <!DOCTYPE html>
  <html>
  <?php $this->load->view('partials/head'); ?>

  <body>

      <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-default">
                  <div class="panel-heading">CODEIGNITER 3 TUTORIAL | Authentification </div>
                  <div class="panel-body">
                      <?php if ($this->session->flashdata('login_failed')) : ?>
                          <?php echo '<p class="alert alert-danger w-100 h-100">' . $this->session->flashdata('login_failed') . '</p>'; ?>
                      <?php endif; ?>
                      <form role="form" action="<?= base_url('users/login') ?>" method="post">
                          <fieldset>
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="email" name="email" autofocus="" value="">
                                  <?= form_error('email', '<p class="alert alert-danger">', '</p>') ?>

                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Password" name="password" value="">
                                  <?= form_error('password', '<p class="alert alert-danger">', '</p>') ?>

                              </div>
                              <button type="submit" class="btn btn-primary">Enter</button>
                              <button type="reset" class="btn btn-reset">Reset</button>
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div><!-- /.col-->
      </div><!-- /.row -->

      <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
      <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
      <script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
      <script src="<?= base_url('assets/js/bootstrap-table.js') ?>"></script>
      <script src="<?= base_url('assets/js/global.js') ?>"></script>
      <script src="<?= base_url('assets/js/fontawesome.min.js') ?>"></script>

      <!-- main.js -->
      <script src="<?= base_url('assets/js/main.js') ?>"></script>
      <!-- End of main.js -->
      <script>
          ! function($) {
              $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                  $(this).find('em:first').toggleClass("glyphicon-minus");
              });
              $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
          }(window.jQuery);

          $(window).on('resize', function() {
              if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
          })
          $(window).on('resize', function() {
              if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
          })
      </script>
      <script>
          $('#calendar').datepicker({});

          ! function($) {
              $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                  $(this).find('em:first').toggleClass("glyphicon-minus");
              });
              $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
          }(window.jQuery);

          $(window).on('resize', function() {
              if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
          })
          $(window).on('resize', function() {
              if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
          })
      </script>
  </body>

  </html>