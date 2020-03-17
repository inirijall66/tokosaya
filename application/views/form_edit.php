<?php
	$id 			= $as->id_produk;
if($this->input->post('is_submitted')){
	$nama_produk			= set_value('nama_produk');
	$stok			= set_value('stok');
	$harga			= set_value('harga');
} else {
	$nama_produk			= $as->nama_produk;
	$stok			= $as->stok;
	$harga			= $as->harga;
}
?>
<!DOCTYPE html>
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
					<h1>Edit Produk</h1>
						<form class="form-horizontal" method="post" action="<?php echo base_url() . "index.php/Produk/edit/" .$id; ?>" enctype="multipart/form-data">
						<div class="form-body">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
								<div class="col-sm-5">
								  <input type="text" class="form-control" name="nama_produk" placeholder="" value="<?php echo $nama_produk ?>">
								</div>
							  </div>
							   <div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Harga Produk</label>
								<div class="col-sm-5">
								  <input type="text" class="form-control" name="harga" placeholder="" value="<?php echo $harga ?>">
								</div>
							  </div>
							  
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Available Stock</label>
								<div class="col-sm-5">
								  <input type="text" class="form-control" name="stok" placeholder="" value="<?php echo $stok ?>">
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
								  <button type="submit" class="btn btn-default">Save</button>
								</div>
							  </div>
							 </div>
				</form>
						
				</div>
		</div>
	</div>
</body>
<footer>
	<?php echo $this->load->view('layout/footer') ?>
	</footer>
</html>