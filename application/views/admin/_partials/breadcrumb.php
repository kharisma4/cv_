<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">    
      <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5>
              <i class="icon fa fa-check"></i>
              <?php echo $this->session->flashdata('success'); ?>
            </h5>                
          </div>
      <?php endif; ?>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->