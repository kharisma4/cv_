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
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $biodata->biodata_id ?>" />
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="<?php echo $biodata->name ?>" type="text" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" id="name" placeholder="Name" name="name">
                    <div class="invalid-feedback">
                        <?php echo form_error('name') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="place">Place</label>
                    <input type="text" value="<?php echo $biodata->place ?>" class="form-control <?php echo form_error('place') ? 'is-invalid':'' ?>" id="place" placeholder="Place" name="place">
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
                    <input type="text" value="<?php echo $biodata->date ?>" class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>" data-inputmask="'alias': 'dd-mm-yyyy'" name="date" data-mask>
                    <div class="invalid-feedback">
                        <?php echo form_error('date') ?>
                    </div>
                    
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" value="<?php echo $biodata->address ?>" class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>" id="address" placeholder="Address" name="address">
                    <div class="invalid-feedback">
                        <?php echo form_error('address') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="moto">Moto</label>
                    <input type="text" value="<?php echo $biodata->moto ?>" class="form-control <?php echo form_error('moto') ? 'is-invalid':'' ?>" id="moto" placeholder="Moto" name="moto">
                    <div class="invalid-feedback">
                        <?php echo form_error('moto') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $biodata->email ?>" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" value="<?php echo $biodata->location ?>" class="form-control <?php echo form_error('location') ? 'is-invalid':'' ?>" id="location" placeholder="Location" name="location">
                    <div class="invalid-feedback">
                        <?php echo form_error('location') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" value="<?php echo $biodata->phone ?>" class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" id="phone" placeholder="Phone" name="phone">
                    <div class="invalid-feedback">
                        <?php echo form_error('phone') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="religion">Religion</label>
                    
                    <select class="form-control select2" style="width: 100%;" name="religion">
                        <option value="<?php echo $biodata->religion ?>"><?php echo $biodata->religion ?></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghuchu">Konghuchu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="resume">Resume</label>
                    <textarea class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="editor1" style="width: 100%" name="resume"><?php echo $biodata->resume ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
                    
                <div class="form-group">
                    <label for="sex">Gender</label>
                    <select class="form-control select2" style="width: 100%;" name="sex">
                        <option value="<?php echo $biodata->sex ?>"><?php echo $biodata->sex ?></option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
                            
                  <div class="form-group">
                    <label for="foto">Foto</label></br>
                    <img class="img-bordered-sm" style="height: auto;width: 30%;" src="<?php echo base_url('assets/img/about/'. $biodata->foto ) ?>" alt="user image">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="hidden" name="old_image" value="<?php echo $biodata->foto ?>" />
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
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
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