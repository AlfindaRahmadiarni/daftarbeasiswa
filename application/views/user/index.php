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
							        <li role="presentation"><a href="<?php echo site_url().'User/' ?>" class="active">Home</a></li>
							    <?php endif; ?>

							    <?php if($this->session->userdata('logged_in')) : ?>
							        <?php $username = $this->session->userdata('username'); ?>
							        <li role="presentation"><a href="<?php echo site_url().'User/' ?>" class="active"><?php echo $username; ?>'s Home</a></li>
							    <?php endif; ?>

							    <li role="presentation"><a href="<?php echo site_url().'User/pendaftar/' ?>">Pendaftar</a></li>

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

<div style="margin-top: 80px;">
<?php if($this->session->flashdata('user_loggedout')): ?>
  <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
<?php endif; ?>
</div>
	
	<section id="main-slider" style="margin-top: -20px">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url().'assets/user/images/slider/bg1.jpg'?>)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Info <span>Beasiswa</span></h2>
                                    <p class="animation animated-item-2"> Nah, di sinilah perlunya mengetahui info beasiswa yang rutin dibuka</p>
                                    
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url().'assets/user/images/slider/img3.png'?>" class="img-responsive">
                                </div>
 	                    </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature" id="info">
		<div class="container">
			<div class="text-center">
				<h2><b>Info Beasiswa</b></h2>
				<div class="col-md-4">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>	
						<h2>Kuota</h2>
						<h4><?php echo $beasiswa['kuota'] ?></h4>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-laptop"></i>	
						<h2>Deadline</h2>
						<!-- <h4><?php //echo $beasiswa['deadline'] ?></h4> -->
						<h4><?php echo tgl_indo($beasiswa['deadline']) ?></h4>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-cloud"></i>	
						<h2>Periode</h2>
						<h4><?php echo $beasiswa['periode'] ?></h4>
						
					</div>
				</div>
			</div>
		</div>
	</div>     
	
	<section id="partner" class="conatcat-info">
        <div class="container">
            <div class="center wow fadeInDown">
                <h1 style="color: whitesmoke;">Kontak</h1>
                
            </div>    <br><br><br>

            <div class="partners">
            	<div class="col-md-6">
					<div class="contact-info hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-phone"></i>	
						<h3 style="color:white;">Phone Number</h3>
						<!-- <h4><?php //echo $beasiswa['deadline'] ?></h4> -->
						<h4 style="color: whitesmoke;"><b>0812 2345 1111</b></h4>
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-info hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-home"></i>	
						<h3 style="color:white;">Location</h3>
						<!-- <h4><?php //echo $beasiswa['deadline'] ?></h4> -->
						<h4 style="color: whitesmoke;">Politeknik Negeri Malang</h4>
						
					</div>
				</div>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->
	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            
                            <h2>Kritik dan Saran?</h2>
                            <p>Jika anda mempunyai kritik dan saran silahkan hubungi kontak di atas</p>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
	
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
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
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