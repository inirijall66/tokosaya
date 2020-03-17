<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TOKO SAYA</title>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>
<?php echo $this->load->view('layout/top_menu') ?>
<div id="container">
<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
	<h1>Tambahkan Produk Baru</h1>
				
		<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/Produk/create" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
			<div class="col-sm-5">
			  <input type="text" class="form-control" name="nama_produk" placeholder="Nama" value="<?php echo set_value('nama_produk') ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Harga Produk</label>
			<div class="col-sm-5">
			  <input type="text" class="form-control" name="harga" placeholder="Harga" value="<?php echo set_value('harga') ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Stok Tersedia</label>
			<div class="col-sm-5">
			  <input type="text" class="form-control" name="stok" placeholder="Stok" value="<?php echo set_value('stok') ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
			<div class="col-sm-5">
			  <input type="file" class="form-control" name="userfile" >
			</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Simpan</button>
			  <a type="button" href="<?php echo base_url() ?>index.php/Produk" class='btn btn-danger btn-sm'>Batal</a>
			</div>
		  </div>
		</form>
	
</div>
</div>
</div>
</div>
</body>
<footer>
	<?php echo $this->load->view('layout/footer') ?>
	</footer>
</html>