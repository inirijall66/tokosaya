<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
	  <a href="<?php echo base_url() ?>index.php/Konsumen"class='navbar-brand'>Toko Saya</a>
    <img src="<?php echo base_url() ?>asset/img/logo.jpg" height="45"> <br>
    </div>

    <!-- Berisi nav, formulir, dan konten lainnya untuk beralih -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
      <ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo base_url() ?>index.php/Konsumen"class='navbar-brand'>Home</a></li>
        <li>
			<?php
				$text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
				$text_cart_url .= ' Inside Cart: '. $this->cart->total_items() .' items';
			?>
			<?php echo anchor('welcome/cart', $text_cart_url)?>
		</li>
		<?php if($this->session->userdata('username')) { ?>
			<li><div style="line-height:50px;">Masuk Sebagai : <?php echo $this->session->userdata('username')?></div></li>
			<li><?php echo anchor('logout', 'Logout');?></li>
		<?php } else { ?>
			<li><?php echo anchor('login', 'Login');?></li>
		<?php } ?>
      </ul>
	  
    </div><!-- /.navbar-collapse -->
    
  </div><!-- /.container-fluid -->
</nav>