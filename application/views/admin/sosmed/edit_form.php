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
                <h3 class="card-title">Edit Sosmed</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/sosmed/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $sosmed->id ?>" />
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input value="<?php echo $sosmed->nama ?>" type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input value="<?php echo $sosmed->icon ?>" type="text" class="form-control <?php echo form_error('icon') ? 'is-invalid':'' ?>" id="icon" placeholder="Icon" name="icon">
                    <div class="invalid-feedback">
                        <?php echo form_error('icon') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="link">Link</label>
                    <input value="<?php echo $sosmed->link ?>" type="text" class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>" id="link" placeholder="link" name="link">
                    <div class="invalid-feedback">
                        <?php echo form_error('link') ?>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
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