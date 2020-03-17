<!DOCTYPE html>
<html lang="en">
	<head>
		<title>TOKO SAYA</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		
		<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css"> 

	</head>
	<body>
	<?php echo $this->load->view('layout/top_menu_konsumen') ?>
		
</html>


   </div>
		<!-- Tampilkan semua produk -->
		<div class="row">
		<div class="col-md-1"></div>
			<div class="col-md-10">
	<h1>Nama Produk</h1>
	<div id="body">
		
		
		<!-- looping products -->
		  <?php
			$no=1;
			$sql="SELECT * FROM produk";
			$dts=$this->db->query($sql);
			foreach ($dts->result() as $product) {
			?>
		  <div class="col-sm-3 col-md-3">
			<div class="thumbnail">
			 <a href="<?php echo base_url(); ?>index.php/Konsumen/detail/<?php echo $product->id_produk ?>" itemprop="contentUrl" data-size="480x360">
				<img class="img-thumbnail img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $product->image; ?>"itemprop="thumbnail" alt="Image description" />
			</a>
			  <div class="caption">
				<h3 style="min-height:60px;"><?=$product->nama_produk?></h3>
				<p>Rp.<?=$product->harga?></p>
			  </div>
			</div>
		  </div>
		  <?php } ?>
		<!-- end looping -->
		</div>
		</div>
		</div>
		
	</body>
	<footer>
	<?php echo $this->load->view('layout/footer') ?>
	</footer>
</html>