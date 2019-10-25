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
                        <a class="btn btn-primary" href="<?php echo site_url('admin/portofolio/add') ?>">
                        <i class="fa fa-plus"></i> Add New
                        </a>
                         Data Portofolio
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>Nama</th>
                    <th>Katagori</th>
                    <th>Link</th>
                    <th>Gambar</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($portofolio as $port): ?>
                    <tr>
                    <td><?php echo $port->nama ?></td>
                    <td><?php echo $port->katagori ?></td>
                    <td><?php echo $port->link ?></td>
                    <td><?php echo $port->foto ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo site_url('admin/portofolio/edit/'.$port->portofolio_id) ?>">
                            <i class="fa fa-edit"></i> 
                        </a>
                        <a class="btn btn-danger" onclick="deleteConfirm('<?php echo site_url('admin/portofolio/delete/'.$port->portofolio_id) ?>')" href="#!" class="btn btn-small text-danger">
                            <i class="fa fa-trash"></i> 
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
    <!-- Delete Confirmation-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>
</html>