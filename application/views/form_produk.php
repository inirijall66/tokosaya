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
		
		<!---untuk menampilkan jarak antar gambar--->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php echo $this->load->view('layout/top_menu') ?>
<div id="container">
<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
	<h1>Nama Produk</h1>
	<div id="body">
		<a type="button" href="<?php echo base_url() ?>index.php/Produk/add" class='btn btn-primary btn-sm'>Tambah Produk</a>
		<a href="<?php echo base_url() ?>index.php/Login/logout" class="btn btn-danger btn-rounded pull-right" style="margin-top: -6px">Logout</a>
		<a class="btn btn-rounded pull-right" style="margin-top: -6px">Selamat Datang : <?php echo $this->session->userdata('username')?></a>
		<table id="myTable" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Product Name</th>
				<th class="text-center">Stock</th>
				<th class="text-center">Harga</th>
				<th class="text-center">Gambar</th>
				<th class="text-center">Dokumen</th>
				<th width="20%" class="text-center">Aksi</th><!---untuk mengatur lebar kolom--->
			</tr>
		</thead>
		<tbody>
		<?php
			$no=1;
			$sql="SELECT * FROM produk";
			$dts=$this->db->query($sql);
			foreach ($dts->result() as $row) {
			?>
			<tr>
				<td><?php echo $no++ ; ?></td>
				<td><?php echo $row->nama_produk ; ?></td>
				<td><?php echo $row->stok ; ?></td>
				<td><?php echo $row->harga ; ?></td>
				<td>
				<img class="img-thumbnail img-fluid" src="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>"itemprop="thumbnail" alt="Image description" />
				</td>
				<td>
				<a href="<?php echo base_url(); ?>uploads/<?php echo $row->image; ?>"><?= $row->image ?></a>
				</td>
				<td>
				<a  href="<?php echo base_url() ?>index.php/Produk/edit/<?php echo $row->id_produk ?>" class="btn btn-info btn-rounded">
											<span class="glyphicon glyphicon-plus"></span>&nbsp;Edit</a>
				<a href="<?php echo base_url() ?>index.php/Produk/delete/<?php echo $row->id_produk ?>" >
											<button type="button" class="btn btn-danger btn-rounded">
												<span class="glyphicon glyphicon-trash"></span>Hapus
											</button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		</table>
	</div>
</div>
</div>
</div>
</div>
</body>
<footer>
	<?php echo $this->load->view('layout/footer') ?>
	</footer>
</html>