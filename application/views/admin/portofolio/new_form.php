<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div class="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="content-wrapper">

		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Portofolio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/portofolio/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="katagori">Katagori</label>                    
                    <select class="form-control select2" style="width: 100%;" name="katagori">
                        <option value="website">Website</option>
                        <option value="design">Design</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>" id="link" placeholder="Link" name="link">
                    <div class="invalid-feedback">
                        <?php echo form_error('link') ?>
                    </div>
                  </div>                            
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
    
</body>
</html>