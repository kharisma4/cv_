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
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <!--a class="btn btn-primary" href="<?php echo site_url('admin/biodata/add') ?>">
                        <i class="fa fa-plus"></i> Add New
                        </a-->
                        Biodata
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Nama</th>
                    <th>Place, Date of birth</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($biodata as $bio): ?>
                    <tr>
                    <td><?php echo $bio->name ?></td>
                    <td><?php echo $bio->place ?>, <?php echo $bio->date ?></td>
                    <td><?php echo $bio->email ?></td>
                    <td><?php echo $bio->phone ?></td>
                    <td>
                        <a class="btn btn-danger" href="<?php echo site_url('admin/biodata/edit/'.$bio->biodata_id) ?>">
                        <i class="fa fa-edit"></i> Edit
                        </a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
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