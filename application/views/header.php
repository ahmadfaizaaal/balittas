<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balai Penelitian Tanaman Pemanis dan Serat</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="thetop"></div>
		<header>
			<?php
				if (!empty($judul)) { ?>
					<div class="hidden-md hidden-lg" style="background-color: rgb(28,69,26); height: 70px;"></div>							
			<?php 
				} ?>		
			<nav class="navbar navbar-inverse navbar-fixed-top navbarHover">
				<div class="container-fluid">
				    <div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">						    
				      <!-- <a href="<?php //echo base_url() ?>"><img src="<?php //echo base_url() ?>item img/logoBalittas2.png" style="width:280px;margin-top: -18px;margin-bottom: -6px;margin-left: 5px;"></a> -->
				      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>item img/logobalittas.png" style="width:280px; margin-left: 5px;"></a>
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>			
				    <div class="collapse navbar-collapse">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 75px;">
					      	<a href="<?php echo base_url() ?>" class="glyphicon glyphicon-home dropbtnHeader" style="text-decoration-line: none;font-size: 14px;"></a>
					      	<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Jenis Tembakau <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -30px;">
								  	<div class="container-fluid">
								  		<a href="<?php echo base_url() ?>varietas/jenistembakau/asalusul" style="margin-top: 10px;">Asal Usul</a>
								  		<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenistembakau/kegunaan">Kegunaan</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenistembakau/waktutanam">Waktu Tanam</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,25,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenistembakau/daerahpengembangan">Daerah Pengembangan</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>varietas/jenistembakau/daerahpenanaman" style="margin-bottom: 8px;">Daerah Penanaman</a>							          	
								  	</div>							  	
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Produk <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -178px;">
								  	<div class="container-fluid">	  		
							          	<a href="<?php echo base_url() ?>produk/benih" style="margin-top: 10px;">Benih</a>
								  		<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>produk/produk2">Alat dan Mesin</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>produk/produk1">Formula</a>
							          	<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          	<a href="<?php echo base_url() ?>produk/produk2" style="margin-bottom: 8px;">Produk Hilir</a>					    
								  	</div>
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Teknologi Budidaya <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -265px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/penangkaranBenih" style="margin-top: 10px;">Pesemaian</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/pesemaian">Pemupukan</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url() ?>teknologibudidaya/pemupukan">Pengendalian Penyakit</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo base_url() ?>teknologibudidaya/bebasChlor" style="margin-bottom: 8px;">Pengendalian Hama</a>
							          			<!-- <hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
									          	<a href="<?php echo base_url() ?>teknologibudidaya/pengendalianPenyakit" style="margin-bottom: 8px;">Panen dan Pasca Panen</a> -->
								  			</div>
								  			<div class="col-sm-6 col-lg-6">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/pengendalianHama" style="margin-top: 10px;">Panen dan Pasca Panen</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/panen">Kesesuaian Lahan</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/kesesuaian">Sorting dan Grading</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo base_url() ?>teknologibudidaya/budidaya">Morfologi dan Biologi</a>
								  			</div>
								  		</div>							  		
								  	</div>							  								          
							  	</div>
							</div>					      		      	
					    </ul>				    
				    </div>

				    <div class="collapse navbar-collapse" id="main">			    
					    <ul class="nav navbar-nav navbar-right hidden-md hidden-lg" style="margin-top: 8px;margin-right: 75px;">
					      	<a href="<?php echo base_url() ?>" class="glyphicon glyphicon-home dropbtnHeader" style="text-decoration-line: none;font-size: 14px;margin-left: 8px;"></a>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jenis Tembakau <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>varietas/jenistembakau/asalusul">Asal Usul</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenistembakau/kegunaan">Kegunaan</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenisWaktu">Waktu Tanam</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenistembakau/daerahpengembangan">Daerah Pengaembangan</a></li>
						          	<li><a href="<?php echo base_url() ?>varietas/jenistembakau/daerahpenanaman">Prosesing</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>produk/benih">Benih</a></li>
						          	<li><a href="<?php echo base_url() ?>produk/produk2">Alat dan Mesin</a></li>
						          	<li><a href="<?php echo base_url() ?>produk/produk1">Formula</a></li>
						          	<li><a href="<?php echo base_url() ?>produk/produk2">Produk Hilir</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Teknologi Budidaya <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo base_url() ?>teknologibudidaya/penangkaranBenih">Pesemaian</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pesemaian">Pemupukan</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pemupukan">Pengendalian Penyakit</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/bebasChlor">Pengendalian Hama</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pengendalianPenyakit">Panen dan Pasca Panen</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/pengendalianHama">Kesesuaian Lahan</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/panen">Sorting dan Grading Tembakau</a></li>
						          	<li><a href="<?php echo base_url() ?>teknologibudidaya/kesesuaian">Morfologi dan Biologi Tembakau</a></li>
						          	<!-- <li><a href="<?php echo base_url() ?>teknologibudidaya/budidaya">Budidaya Tembakau Cerutu</a></li> -->
						       	</ul>
					      	</li>				      	
					    </ul>				    
				    </div>
				</div>
			</nav>										
			<!-- gambar tengah -->			
			<?php
				if (empty($judul)) { ?>
					<div class="containerImg">
						<video autoplay muted loop style="width: 100%">
							<source src="<?php echo base_url() ?>item img/tembakauFix.mp4" type="video/mp4">
						</video>			  				 	
					</div>							
			<?php
				} else { ?>
					<div class="containerImg">
						<img src="<?php echo base_url() ?>item img/tembakauHeader.jpg" alt="" style="width: 100%;">
					 	<div class="contentImg text-center">
						    <h1 class="hidden-xs hidden-sm" style="margin-top:12%;font-size:5vw; font-family: futura md bt;"><?php echo $judul; ?></h1>
						    <h1 class="hidden-md hidden-lg" style="margin-top:6vw;font-size:5vw; font-family: futura md bt;"><?php echo $judul; ?></h1>
					  	</div>
					</div>
			<?php
				} ?>
		</header>
	</body>
	<script>
		//JS for scroll to top
		$(window).scroll(function() {
		    if ($(this).scrollTop() > 50 ) {
		        $('.scrolltop:hidden').stop(true, true).fadeIn();
		    } else {
		        $('.scrolltop').stop(true, true).fadeOut();
		    }
		});
		$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
	</script>
</html>