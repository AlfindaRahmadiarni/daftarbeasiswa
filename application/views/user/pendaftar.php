<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Beasiswa Univa</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/user/css/bootstrap.min.css'?>">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/user/css/font-awesome.css'?>">
	<!-- <link rel="stylesheet" href="css/animate.css"> -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/user/css/animate.css'?>">
	<!-- <link href="css/prettyPhoto.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/user/css/prettyPhoto.css'?>">
	<!-- <link href="css/style.css" rel="stylesheet" />	 -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/user/css/style.css'?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
<style type="text/css">
	#pendaftar{
		margin-top: 30px;
	}
	.tes{
		margin-top: 120px;
	}
	.nav-tabs > li > a {
	    border-radius: 0;
	    color: #333;
	    padding: 15px;
	}

</style>


  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo site_url().'User/' ?>"><h1><span>Info</span>Beasiswa</h1></a>
						</div>
					</div> 
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href=""></a></li>
								<li role="presentation"><a href=""></a></li>
								<li role="presentation"><a href=""></a></li>
								<li role="presentation"><a href=""></a></li>
								<li role="presentation"><a href=""></a></li>
								<li role="presentation"><a href=""></a></li>
								<?php if($this->session->userdata('logged_in')) : ?>
							        <li role="presentation"><a href="<?php echo site_url().'Daftar/datadiri/' ?>">Data Diri</a></li>
							    <?php endif; ?>	

							    <?php if($this->session->userdata('logged_in') && $this->session->userdata('level')==4) : ?>
							        <li role="presentation"><a href="<?php echo site_url().'Daftar/dataprestasi/' ?>">Data Prestasi</a></li>
							    <?php endif; ?>	
							</ul>
							<ul class="nav nav-tabs" role="tablist">
								<?php if(!$this->session->userdata('logged_in')) : ?>
							        <li role="presentation"><a href="<?php echo site_url().'User/' ?>">Home</a></li>
							    <?php endif; ?>

							    <?php if($this->session->userdata('logged_in')) : ?>
							        <?php $username = $this->session->userdata('username'); ?>
							        <li role="presentation"><a href="<?php echo site_url().'User/' ?>"><?php echo $username; ?>'s Home</a></li>
							    <?php endif; ?>

							    <li role="presentation"><a href="<?php echo site_url().'User/pendaftar/' ?>" class="active">Pendaftar</a></li>
							    <?php if(!$this->session->userdata('logged_in')) : ?>
							        <li role="presentation"><a href="<?php echo site_url().'Daftar/daftar/' ?>">Form Pendaftaran </a></li>
							    <?php endif; ?>	

							    

						        <li role="presentation"><a href="<?php echo site_url().'Pengumuman/userindex/' ?>">Pengumuman</a></li>

								<?php if(!$this->session->userdata('logged_in')) : ?>
								<li role="presentation"><a href="<?php echo site_url().'User/login/' ?>">Login</a></li>
								<?php endif; ?>	

								<?php if($this->session->userdata('logged_in')) : ?>
								<li role="presentation"><a href="<?php echo site_url().'User/logout/' ?>">Logout</a></li>
								<?php endif; ?>					
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
<div class="tes" align="center"><a href="<?php echo site_url('User/pendaftar/') ?>" class="btn btn-success">Grid</a>
<a href="<?php echo site_url('User/listpendaftar/') ?>" class="btn btn-warning">List</a></div>
	
	<div id="pendaftar">
		<div class="container">
			<div class="text-center">
				<h2><b>Pendaftar</b></h2><br>
			</div>
			<div class="row">
			<?php
	        $this->load->helper('text');
				foreach($pendaftar as $row) 
			    {
			      echo "<div class='col-md-3'><h4>ID Daftar : $row->idDaftar</h4>";?>
			      <p><?php echo "<img src='".base_url()."uploads/".$row->foto."' class='rounded' width='200' height=200'>"?></p>
			      <?php
			      echo "<h5>nim 			: $row->nim</h5>";
			      echo "<h5>Nama 			: $row->nama</h5>";
			      echo "<h5>Jalur	 		: $row->keterangan</h5>";
			      echo "<h5>Jurusan 		: $row->jurusan</h5>";
	        	  $tgl=character_limiter($row->tglDaftar,10); 
			      echo "<h5>Tanggal Daftar 	: ".(tgl_indo($tgl))."</h5>"; ?>
			</div>
			      <?php
			    } 
			?>

		</div>
	</div><br><br>
	<div align="center">
 		<?php 
        // $links ini berasal dari fungsi pagination 
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
        if (isset($links)) {
            echo $links;
        } 
        ?>
    </div>
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; InfoBeasiswa 2018 All Rights Reserved.
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
				
		</div>
	</footer>


	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- <script src="js/jquery-2.1.1.min.js"></script>	 -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </body>
</html>

<script src="<?php echo base_url().'assets/user/js/jquery-2.1.1.min.js'?>"></script>
<script src="<?php echo base_url().'assets/user/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/user/js/jquery.prettyPhoto.js'?>"></script>
<script src="<?php echo base_url().'assets/user/js/jquery.isotope.min.js'?>"></script>
<script src="<?php echo base_url().'assets/user/js/wow.min.js'?>"></script>
<script src="<?php echo base_url().'assets/user/js/functions.js'?>"></script>