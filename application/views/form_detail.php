<?php
	$id 			= $produk->id_produk;
if($this->input->post('is_submitted')){
	$nama_produk	= set_value('nama_produk');
	$stok			= set_value('stok');
	$harga			= set_value('harga');
	$image			= set_value('image');
} else {
	$nama_produk			= $produk->nama_produk;
	$stok			= $produk->stok;
	$harga			= $produk->harga;
	$image			= $produk->image;
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
<?php echo $this->load->view('layout/top_menu_konsumen') ?>
	<div id="container">
		<div class="row">
			<div class="col-md-1"></div>
				<div class="middle" align="center">
					<h1>Detail Produk <?php echo $nama_produk ?></h1>
					 <div class="middle" align="center">
						<div class="thumbnail">
						 <a href="<?php echo base_url(); ?>uploads/<?php echo $image ?>" itemprop="contentUrl" data-size="480x360">
							<img class="img-thumbnail img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $image ?>"itemprop="thumbnail" alt="Image description" />
						</a>
						</div>
					  </div>
				</div>
				<div class="middle" align="center">
						<form class="form-horizontal" method="post" action="<?php echo base_url() . "index.php/Konsumen/cart"; ?>" enctype="multipart/form-data">
						<div class="form-body">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-5 control-label">Nama Produk :</label>
								<div class="col-sm-3">
								  <span><?php echo $nama_produk ?></span><input type="hidden" class="form-control" name="nama_produk" placeholder="" value="<?php echo $nama_produk ?>">
								</div>
							  </div>
							   <div class="form-group">
								<label for="inputEmail3" class="col-sm-5 control-label">Harga Produk : (Rp)</label>
								<div class="col-sm-3">
								   <span><?php echo $harga ?></span><input type="hidden" class="form-control" name="harga" placeholder="" value="<?php echo $harga ?>">
								</div>
							  </div>
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-5 control-label">Jumlah Pesanan</label>
								<div class="col-sm-3">
								  <input type="number" class="form-control" name="jumlah_beli" placeholder="" value="1">
								   <input type="hidden" class="form-control" name="id_produk" placeholder="" value="<?php echo $id ?>">
								</div>
							  </div>	
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-5 control-label">Keterangan</label>
								<div class="col-sm-3">
								   <textarea class="form-control" name="keterangan" value="-"></textarea>
								</div>
							  </div>								  
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-info">Lanjut Cart</button>
								  <a type="button" href="<?php echo base_url() ?>index.php/Konsumen" class='btn btn-danger btn-sm'>Batal</a>
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