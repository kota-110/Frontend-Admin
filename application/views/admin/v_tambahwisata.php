
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
        Data Tempat Wisata
			</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tempat Wisata</a></li>
				<li class="active"> Tambah Data Tempat Wisata</li>
				
      </ol>
		</section>
		 <!-- Form Input Data Tempat Wisata -->
		 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Menambahkan Data Tempat Wisata</h3>
            </div>

            <!-- form masukan data -->
            <form role="form">
              <div class="box-body">
           			<div class="form-group">
             			<label>Kategori Wisata</label>
           				<select class="form-control select2">
                      <option selected="selected">Pilih --Kategori Wisata</option>
			   							<option>Wisata Alam</option>
											<option>Wisata Buatan</option>
						  				<option>Wisata Budaya</option>
                  </select>  
              	</div>
								
								<div class="form-group">
                  <label> Kode Tempat Wisata </label>
                  <input type="text" class="form-control" id="kdWisata" placeholder="Masukan Kode Tempat Wisata">
                </div>
                
								<div class="form-group">
                  <label> Nama Tempat Wisata</label>
                  <input type="text" class="form-control" id="namaWisata" placeholder="Masukan Nama Tempat Wisata">
                </div>

								<div class="form-group">
                  <label> Latitude </label>
                  <input type="text" class="form-control" id="latitude" placeholder="Masukan Posisi Latitude">
                </div>

								<div class="form-group">
                  <label> Longitude </label>
                  <input type="text" class="form-control" id="longitude" placeholder="Masukan Posisi Longitude">
                </div>

								<div class="form-group">
                  <label> Alamat </label>
                  <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Tempat Wisata">
                </div>

								<div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Jam Buka:</label>
                  <div class="input-group">
                    <input type="text" id="jamBuka" class="form-control timepicker">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>

									<div class="bootstrap-timepicker">
                		<div class="form-group">
                  		<label>Jam Tutup:</label>
                  	<div class="input-group">
                   		<input type="text" id="jamTutup" class="form-control timepicker">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>

									<div class="form-group">
                  <label> Fasilitas </label>
                  <input type="text" class="form-control" id="fasilitas" placeholder="Masukan Fasilitas Tempat Wisata">
                </div>

								<div class="form-group">
                  <label> Deskripsi </label>
                  <input type="text" class="form-control" id="deskripsi" placeholder="Masukan Deskripsi Tempat Wisata">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Foto Tempat Wisata</label>
                  <input type="file" id="imgUrl">
                  <p class="help-block">Masukan foto terkait tempat wisata</p>
                </div>
              </div>
              <!-- /.box-body -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
					</div>



</div>
<?php $this->load->view('admin/footer')?>
</body>
</html>

<script>
  $(function () {
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
