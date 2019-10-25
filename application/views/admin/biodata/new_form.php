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
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" id="name" placeholder="Name" name="name">
                    <div class="invalid-feedback">
                        <?php echo form_error('name') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="place">Place</label>
                    <input type="text" class="form-control <?php echo form_error('place') ? 'is-invalid':'' ?>" id="place" placeholder="Place" name="place">
                    <div class="invalid-feedback">
                        <?php echo form_error('place') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="date">Date</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>" data-inputmask="'alias': 'dd-mm-yyyy'" name="date" data-mask>
                    <div class="invalid-feedback">
                        <?php echo form_error('date') ?>
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>" id="address" placeholder="Address" name="address">
                    <div class="invalid-feedback">
                        <?php echo form_error('address') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control <?php echo form_error('location') ? 'is-invalid':'' ?>" id="location" placeholder="Location" name="location">
                    <div class="invalid-feedback">
                        <?php echo form_error('location') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" id="phone" placeholder="Phone" name="phone">
                    <div class="invalid-feedback">
                        <?php echo form_error('phone') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="religion">Religion</label>
                    <input type="text" class="form-control <?php echo form_error('religion') ? 'is-invalid':'' ?>" id="religion" placeholder="Religion" name="religion">
                    <div class="invalid-feedback">
                        <?php echo form_error('religion') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="resume">Resume</label>
                    <input type="text" class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="resume" placeholder="Resume" name="resume">
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sex">Gender</label>
                    <input type="text" class="form-control <?php echo form_error('sex') ? 'is-invalid':'' ?>" id="sex" placeholder="Gender" name="sex">
                    <div class="invalid-feedback">
                        <?php echo form_error('sex') ?>
                    </div>
                  </div>

                            
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('price') ? 'is-invalid':'' ?>" id="foto" name="foto">
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