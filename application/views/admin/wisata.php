
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
			<a href="<?php echo base_url()?>index.php/admin/c_tempatwisata/tampil_formwisata" class="btn btn-primary"> Tambah </a>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tempat Wisata</a></li>
				<li class="active">Data Tempat Wisata</li>
				
      </ol>
		</section>
			<!-- Tabel -->
	<section class="content">
	<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
				<h3 class="box-title">Data Tempat Wisata</h3>
			</div>
			<div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              	<div class="row">
              		<div class="col-sm-6"></div>
              		<div class="col-sm-6"></div>
              	</div>
              	<div class="row">
              		<div class="col-sm-12">
              			<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
		                	<thead>
				                <tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama Tempat Wisata</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Alamat</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Jam Buka</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Jam Tutup</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Deskripsi</th>
									<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Aksi</th>
							</thead>
							<?php 
								foreach ($listwisata['values'] as $row) {
							?>
			                <tbody>
			                <tr role="row" class="odd">
			                  <td class="sorting_1"><?php echo $row['namaWisata']; ?></td>
			                  <td><?php echo $row['alamat']; ?></td>
			                  <td><?php echo $row['jamBuka']; ?></td>
			                  <td><?php echo $row['jamTutup']; ?></td>
							  <td><?php echo $row['deskripsi']; ?></td>
							  <td> 
								<a href="https://adminlte.io/download/AdminLTE" class="btn btn-warning"><i class="fa fa-download"></i> Ubah</a>
								<a href="https://adminlte.io/download/AdminLTE" class="btn btn-danger"><i class="fa fa-download"></i> Hapus</a>
							  </td>
			                </tr> 
							</tbody>
							<?php 		
								}			
							?>
						</table>	
					</div>
				</div>
						<div class="row">
							<div class=col-sm-5></div>
							<div class="col-sm-7">
								<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
									<ul class="pagination">
										<li class="paginate_button previous disabled" id="example2_previous">
											<a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
										</li>
										<li class="paginate_button active">
											<a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a>
										</li>
										<li class="paginate_button ">
											<a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a>
										</li>
										<li class="paginate_button next" id="example2_next">
											<a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
			  </div>
            </div>
		  </div>	
		</div>
	</div>
	</section	>



</div>
<?php $this->load->view('admin/footer')?>
</body>
</html>
