
<!DOCTYPE html>
<html>

<?php $this->load->view('admin/head')?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('admin/header')?>
  <!-- Left side column. contains the logo and sidebar -->
	<?php $this->load->view('admin/leftbar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transportasi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-subway"></i> Transportasi</a></li>
        <li class="active">Data Transportasi</li>
      </ol>
    </section>
		 <!-- Form Input Data Tempat Wisata -->
		 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div> -->
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>
      <!-- /.row -->


<div class="box-footer">
  <?php //$this->load->view('admin/footer')?>
	</div>
</body>
</html>
