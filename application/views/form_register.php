<!DOCTYPE html>
<html>
<head>
<title>TOKO SAYA</title>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	<style>
	.box {
		margin: 20px auto 0 auto;
		width: 400px;
	}
	h3 {
		text-align: center;
		margin-bottom: 20px;
		line-height: 1.6;
	}
</style>
</head>
<body class="bg-blue">
	<div class="middle" align="center">
		<img src="<?php echo base_url() ?>asset/img/toko.png" height="120"> <br>
		<h4 style="font-size: 22px">
			TOKO SAYA<br>
			
		</h4>
		<div class="box box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">Silahkan Register</h3>
			</div>
			<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/Login/create" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="true" autofocus>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="email" required="true" autofocus>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="true">
						<input type="hidden" class="form-control" name="group" value="2">
					</div>
					<div class="row">
						<div class="col-md-12" align="middle">
							<input type="submit" value="Register" class="btn btn-primary" />
						</div>
					</div>
				</div>
			</form>
			</br>
			<div class="row">
			<div class="col-md-12" align="middle">
			<a href="<?php echo base_url();?>index.php/Login"><button class="btn btn-danger">Batal</button></a>
			</div>
			</div>
		</div>
	</div>

	
</body>
</html>