<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/balittas.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="thetop"></div>
		<header>			
			<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(28,69,26,0.7);">
				<div class="container-fluid">
				    <div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">						    
				      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" style="width: 55px;height:auto;" style=""></a>
				      <button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>
				    <!-- <ul class="nav navbar-nav">
				      <li class="active"><a href="#">Home</a></li>
				      <li><a href="#">Page 1</a></li>
				      <li><a href="#">Page 2</a></li>
				    </ul> -->
				    <div class="collapse navbar-collapse">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 8px;margin-right: 75px;">
					      	<li style="margin-top: -2px;"><a href="#" class="glyphicon glyphicon-home"></a></li>				      	
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jenis Tembakau <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="#">Manurut Asal Usul</a></li>
						          	<li><a href="#">Kegunaan</a></li>
						          	<li><a href="#">Waktu Tanam</a></li>
						          	<li><a href="#">Daerah Pengaembangan</a></li>
						          	<li><a href="#">Prosesing</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="#">Benih</a></li>
						          	<li><a href="#">Alat dan Mesin</a></li>
						          	<li><a href="#">Formula</a></li>
						          	<li><a href="#">Produk Hilir</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Teknologi Budidaya <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="#">Penangkaran Benih</a></li>
						          	<li><a href="#">Pesemaian</a></li>
						          	<li><a href="#">Pemupukan</a></li>
						          	<li><a href="#">Pemupukan Bebas Chlor</a></li>
						          	<li><a href="#">Pengendalian Penyakit</a></li>
						          	<li><a href="#">Pengendalian Hama</a></li>
						          	<li><a href="#">Panen dan Pasca Panen</a></li>
						          	<li><a href="#">Kesesuaian Lahan</a></li>
						          	<li><a href="#">Budidaya Tembakau Cerutu</a></li>
						       	</ul>
					      	</li>				      	
					    </ul>				    
				    </div>

				    <div class="collapse navbar-collapse" id="main">			    
					    <ul hidden="main" class="nav navbar-nav navbar-right" style="margin-top: 8px;margin-right: 75px;">
					      	<li style="margin-top: -2px;"><a href="#" class="glyphicon glyphicon-home"></a></li>				      	
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jenis Tembakau <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="#">Manurut Asal Usul</a></li>
						          	<li><a href="#">Kegunaan</a></li>
						          	<li><a href="#">Waktu Tanam</a></li>
						          	<li><a href="#">Daerah Pengaembangan</a></li>
						          	<li><a href="#">Prosesing</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="#">Benih</a></li>
						          	<li><a href="#">Alat dan Mesin</a></li>
						          	<li><a href="#">Formula</a></li>
						          	<li><a href="#">Produk Hilir</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Teknologi Budidaya <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="#">Penangkaran Benih</a></li>
						          	<li><a href="#">Pesemaian</a></li>
						          	<li><a href="#">Pemupukan</a></li>
						          	<li><a href="#">Pemupukan Bebas Chlor</a></li>
						          	<li><a href="#">Pengendalian Penyakit</a></li>
						          	<li><a href="#">Pengendalian Hama</a></li>
						          	<li><a href="#">Panen dan Pasca Panen</a></li>
						          	<li><a href="#">Kesesuaian Lahan</a></li>
						          	<li><a href="#">Budidaya Tembakau Cerutu</a></li>
						       	</ul>
					      	</li>				      	
					    </ul>				    
				    </div>

				  </div>
			</nav>
			<!-- gambar tengah -->
			<!-- <div style="height: 50px; background-color: red;"></div>
			<div class="jumbotron text-center">
				<h1>Bootstrap Tutorial</h1> 
    			<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
    			   responsive, mobile-first projects on the web.</p> 
			</div> -->
			<!-- <div style="height: 50px; background-color: red;"></div> -->
			<div class="containerImg">
				<video autoplay muted loop style="width: 100%">
					<source src="<?php echo base_url() ?>item img/tembakauFix.mp4" type="video/mp4">
				</video>			  	
			 	<!-- <div class="contentImg">
				    <h1>Heading</h1>
				    <p>Lorem ipsum..</p>
			  	</div> -->
			</div>			
		</header>
		<br>
		<!-- content -->
		<div class="container">
			<div class="row">		
				<div class="col-sm-9 col-lg-9">
				    <ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">Private</a></li>
					  	<li><a href="#">Pictures</a></li>
					  	<li class="active">Vacation</li> 
					</ul>
				<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;">Varietas Terbaru</h3></a>
				<hr style="border-color: grey">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 4px 4px lightgrey;">
							<a href="<?php echo base_url('Home/detailVarietas') ?>" style="text-decoration-line: none;">
								<img src="item img/tembakau.jpg" alt="" style="width: 100%;">
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> 3 Juli 2017</span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> 14:00</span>	
								<h4 style="color:#fece00;">VARIETAS NC 471</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nisi. ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quaerat!</p>
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 4px 4px lightgrey;">
							<a href="" style="text-decoration-line: none;">
								<img src="item img/tembakau.jpg" alt="" style="width: 100%;">
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> 3 Juli 2017</span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> 14:00</span>	
								<h4 style="color:#fece00;">VARIETAS NC 471</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nisi. ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quaerat!</p>
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 4px 4px lightgrey;">
							<a href="" style="text-decoration-line: none;">
								<img src="item img/tembakau.jpg" alt="" style="width: 100%;">
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> 3 Juli 2017</span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> 14:00</span>	
								<h4 style="color:#fece00;">VARIETAS NC 471</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nisi. ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quaerat!</p>
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 4px 4px lightgrey;">
							<a href="" style="text-decoration-line: none;">
								<img src="item img/tembakau.jpg" alt="" style="width: 100%;">
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> 3 Juli 2017</span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> 14:00</span>	
								<h4 style="color:#fece00;">VARIETAS NC 471</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nisi. ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quaerat!</p>
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 4px 4px lightgrey;">
							<a href="" style="text-decoration-line: none;">
								<img src="item img/tembakau.jpg" alt="" style="width: 100%;">
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> 3 Juli 2017</span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> 14:00</span>	
								<h4 style="color:#fece00;">VARIETAS NC 471</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nisi. ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quaerat!</p>
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 4px 4px lightgrey;">
							<a href="" style="text-decoration-line: none;">
								<img src="item img/tembakau.jpg" alt="" style="width: 100%;">
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> 3 Juli 2017</span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> 14:00</span>	
								<h4 style="color:#fece00;">VARIETAS NC 471</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, nisi. ipsum dolor sit amet, consectetur adipisicing elit. Inventore, quaerat!</p>
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
				</div>
					<ul class="pager" >
						<li><a href=""><</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">></a></li>
					</ul>
					<br>
				</div>				
				<div class="col-sm-3 col-lg-3">
					<br>
					<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;">Pencarian</h3></a>
					<hr style="border-color: grey">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
					<!-- <div class="container-fluid" style="background-color:#57bb82;border-radius: 5px;"> -->
						<form action="" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0;">
							    <input type="text" class="form-control" placeholder="Cari">
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							 </div>
						</form>						
					</div>
					<a href="<?php echo base_url('leaflet') ?>" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;">Leaflet</h3></a>
					
					<hr style="border-color: grey">
					<!-- <div class="thumbnail" style="background-color: white; border-style: none; margin-top: -10px;">
						<h5 style="color:black;">Penyakit Lanas</h5>													
						<img src="item img/1a.jpg" class="img-rounded">
					</div>	

					<div class="thumbnail" style="background-color: white; border-style: none; margin-top: -10px;">
						<div class="container2">
							<img src="item img/1a.jpg" class="image img-rounded">
							<div class="overlay">
								<div class="text">Penyakit Lanas</div>
							</div>						
						</div>													 
					</div> -->				
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-sm-6 col-lg-6">													 
							<img class="leafletImg" src="item img/1a.jpg" class="image" style="width: 100%">						
						</div> 
						<div class="col-sm-6 col-lg-6">
							<img class="leafletImg" src="item img/1b.jpg" class="image" style="width: 100%">
						</div>						
					</div>					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-sm-6 col-lg-6">													 
							<img class="leafletImg" src="item img/2a.jpg" class="image" style="width: 100%">						
						</div> 
						<div class="col-sm-6 col-lg-6">
							<img class="leafletImg" src="item img/2b.jpg" class="image" style="width: 100%">
						</div>						
					</div>					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-sm-6 col-lg-6">													 
							<img class="leafletImg" src="item img/3a.jpg" class="image" style="width: 100%">						
						</div> 
						<div class="col-sm-6 col-lg-6">
							<img class="leafletImg" src="item img/3b.jpg" class="image" style="width: 100%">
						</div>						
					</div>
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-sm-6 col-lg-6">													 
							<img class="leafletImg" src="item img/2a.jpg" class="image" style="width: 100%">						
						</div> 
						<div class="col-sm-6 col-lg-6">
							<img class="leafletImg" src="item img/2b.jpg" class="image" style="width: 100%">
						</div>						
					</div>	
				</div>
			</div>
			</div> <!-- akhir div container atas -->


			<!-- <hr> -->
			<!-- <hr style="border-color: grey"> -->
			<div class="container-fluid" style="background-color: rgba(28,69,26,0.8);">
				<div class="container">
				<!-- Produk -->
				<a href="" style="text-decoration-line:none;"><h3 class="text-center" style="color:white;">Produk</h3></a><br>
				<p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda, facere. Alias deserunt pariatur magnam rerum quod voluptates, quidem id labore quam. Illum nemo minus repellat veritatis aliquid, consequatur, dolorem, laborum magnam voluptatibus consequuntur voluptate tempora! Vel, odio. Corporis nam maiores nemo, dicta temporibus et.</p>
				<br><br>
				<div class="row">
				    <div class="col-sm-3 col-lg-3">
					    <a href="" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none;" >
					    		<img src="item img/hazelnutWh.png" style="width: 40%" col="g">
					    		<img src="item img/hazelnutY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Benih</h4>
					    	</div>
					    </a>
				    </div>
				    <div class="col-sm-3 col-lg-3">
					    <a href="" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
					    		<img src="item img/toolsWh.png" style="width: 40%" col="g">
					    		<img src="item img/toolsY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Alat & Mesin</h4>
					    	</div>
					    </a>
				    </div>
				    <div class="col-sm-3 col-lg-3">
					    <a href="" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
					    		<img src="item img/flaskWh.png" style="width: 40%" col="g">
					    		<img src="item img/flaskY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Formula</h4>
					    	</div>
					    </a>
				    </div>
				    <div class="col-sm-3 col-lg-3">
					    <a href="" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
					    		<img src="item img/pipeWh.png" style="width: 40%" col="g">
					    		<img src="item img/pipeY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Produk Hilir</h4>
					    	</div>
					    </a>
				    </div>
				</div>
				<br></div>
			</div>
			<!-- <hr> -->
			<!-- <hr style="border-color: grey"> -->
			<br><br>
			<div class="container">
			<div class="row">
				<div class="col-sm-3 col-lg-3">
					<a href="" style="text-decoration-line:none;"><h3 class="text-center" style="color:black;margin-top: 0px;">Teknologi Budidaya</h3></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, quae iure blanditiis veniam adipisci, facilis ab necessitatibus! Reiciendis, praesentium, accusamus.</p>
				</div>
				<div class="col-sm-9 col-lg-9">
					<div class="row">
						<div class="col-sm-4 col-lg-4">
						 	<a href="<?php echo base_url('Home/teknologibudidaya'); ?>" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Penangkaran Benih </h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Pesemaian</h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Pemupukan</h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Pemupukan Bebas Chlor</h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Pengendalian Penyakit </h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Pengendalian Hama </h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Panen dan Pasca Panen </h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Kesesuaian Lahan </h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="color:black;text-decoration-line: none;">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<img src="item img/tembakau.jpg" class="img-rounded">
									<h4 style="color:rgb(242,97,5);">Budidaya Tembakau Cerutu</h4>
									<div class="overlayhr"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
					</div>
				</div>				
			</div>
			<!-- <hr> -->
			<hr style="border-color: grey">
			<a href="" style="text-decoration-line:none;"><h3 class="text-center" style="color:black;">Agribisnis</h3></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perferendis, quas consectetur cum. Dolorum quae quam neque facere perspiciatis dignissimos. ipsum dolor sit amet, consectetur adipisicing elit. Distinctio accusantium perferendis eaque, aspernatur ex eos et ad dignissimos, voluptates beatae!</p>
			<br><br>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-lg-3">
					<img src="item img/tembakau.jpg" class="image img-rounded">
				</div>
				<div class="col-xs-8 col-sm-8 col-lg-8">
					<p style="font-size: 20px;">Budidaya tembakau madura</p>
					<!-- <br> -->
					<p>Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Provident quod, quisquam fugiat maiores ipsam. Deserunt molestiae reiciendis, eius natus iure? ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati repudiandae tenetur illo vitae impedit eum culpa esse vero, hic repellendus.</p>	
					<!-- <br> -->
					<div class="text-right">						
						<a href="<?php echo base_url('Home/agribisnis'); ?>">
							<button class="btn btn-success" style="height: 30px;"><p style="font-size: 12px;padding-top: -12px;"><i>Selengkapnya</i></p></button>
						</a>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-lg-3">
					<img src="item img/tembakau.jpg" class="image img-rounded">
				</div>
				<div class="col-xs-8 col-sm-8 col-lg-8">
					<p style="font-size: 20px;">Budidaya tembakau madura</p>
					<!-- <br> -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quod, quisquam fugiat maiores ipsam. Deserunt molestiae reiciendis, eius natus iure? ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati repudiandae tenetur illo vitae impedit eum culpa esse vero, hic repellendus.</p>
					<div class="text-right">						
						<a href="">
							<button class="btn btn-success" style="height: 30px;"><p style="font-size: 12px;padding-top: -12px;"><i>Selengkapnya</i></p></button>
						</a>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-lg-3">
					<img src="item img/tembakau.jpg" class="image img-rounded">
				</div>
				<div class="col-xs-8 col-sm-8 col-lg-8">
					<p style="font-size: 20px;">Budidaya tembakau madura</p>
					<!-- <br> -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident quod, quisquam fugiat maiores ipsam. Deserunt molestiae reiciendis, eius natus iure? ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati repudiandae tenetur illo vitae impedit eum culpa esse vero, hic repellendus.</p>
					<div class="text-right">						
						<a href="">
							<button class="btn btn-success" style="height: 30px;"><p style="font-size: 12px;padding-top: -12px;"><i>Selengkapnya</i></p></button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- MODALS -->
		<div id="myModal" class="modalLeaflet">
		  <span class="closeModal" style="margin-top: 50px; margin-left: 15px;">&times;</span>
		  <img class="modalLeaflet-content" id="imgModal">
		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var max = document.getElementsByClassName("leafletImg");
		for (var i = 0; i < max.length; i++) {
			var img = document.getElementsByClassName("leafletImg")[i];
			var modalImg = document.getElementById("imgModal");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			}
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("closeModal")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		    modal.style.display = "none";
		}
		</script>
		<!-- END OF MODALS -->

		<div class='scrolltop'>
		    <div class='scroll icon' style="width: 50px; height: 40px;">
		    	<i class="glyphicon glyphicon-chevron-up"></i>
		    </div>
		</div>
	</body>
	<br><br><br><br><br><br>
	<footer>
		<div class="container-fluid" style="background-color: rgba(28,69,26,1);">
				<div class="container" style="margin-top: 20px; color:white;">
					<div class="col-sm-3 col-lg-3">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-lg-2">
								<img src="item img/Logo-Kementerian-Pertanian.png" style="width: 230%;">
							</div>
							<div class="col-xs-10 col-sm-10 col-lg-10">
								<p>Balai Penelitian Tanaman Pemanis dan Serat</p>
							</div>
						</div>															
						<p>Jalan Raya Karangploso, Kotak Pos 199, Malang <br>
					   	Jawa Timur, Indonesia <br>
					   	balittas@litbang.pertanian.go.id <br>
					   	balittas.malang@gmail.com  <br>
					   	Telepon : (0341) 491447 <br>
					   	Fax : (0341) 485 121 <br>
						</p>
					</div>
					<div class="col-sm-9 col-lg-9">
						<div class="col-sm-4 col-lg-4 batasfooter">
							<h4>Link Terkait</h3>
							<hr style="margin-top: 0px; margin-bottom: 10px;">
							<div class="footerku">
								<a href="" style="text-decoration-line: none; color:inherit;"><p class="glyphicon glyphicon-ok"></p>&nbsp Kementrian Pertanian</a>
								<br>								
							</div>						
							<div class="footerku">
								<a href="" style="text-decoration-line: none; color:inherit;"><p class="glyphicon glyphicon-ok"></p>&nbsp badan Litbang Pertanian</a>
								<br>								
							</div>	
							<div class="footerku">
								<a href="" style="text-decoration-line: none; color:inherit;"><p class="glyphicon glyphicon-ok"></p>&nbsp UPT Badan Litbang Pertanian</a>
								<br>								
							</div>	
							<div class="footerku">
								<a href="" style="text-decoration-line: none; color:inherit;"><p class="glyphicon glyphicon-ok"></p>&nbsp Pustaka Balitbangtan</a>
								<br>								
							</div>	
							<div class="footerku">
								<a href="" style="text-decoration-line: none; color:inherit;"><p class="glyphicon glyphicon-ok"></p>&nbsp Pusat Unggulan Iptek Tanaman Serat</a>
								<br>								
							</div>														
						</div>
						<div class="col-sm-4 col-lg-4 batasfooter">
							<h4>Sosial Media</h3>
							<hr style="margin-top: 0px; margin-bottom: 13px;">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
							</div>
						</div>						
						<div class="col-sm-4 col-lg-4 batasfooter">						
							<p style="margin-top: 9px; border-bottom-style: dashed; padding-bottom: 10px;">Pengunjung Hari Ini</p>				
							<p style="margin-top: 9px; border-bottom-style: dashed; padding-bottom: 10px;">Pengunjung Bulan Ini</p>										
							<p style="">Total Kunjungan</p>
							<!-- <div class="row">
								<div class="col-xs-4 col-sm-4 col-lg-4" style="margin: 0px -7px 9px 0px;">
									<img src="item img/tembakau.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50">
								</div>								
								<div class="col-xs-4 col-sm-4 col-lg-4" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50">
								</div>																
								<div class="col-xs-4 col-sm-4 col-lg-4" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50">
								</div>
								<div class="col-xs-4 col-sm-4 col-lg-4" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50">
								</div>																
								<div class="col-xs-4 col-sm-4 col-lg-4" style="margin: 0px -7px 9px 0px;">
									<img src="item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50">
								</div>																
							</div> -->
						</div>
					</div>
				</div>
				<br><br><br>				
			</div>
			<div class="container-fluid text-center" style="color:white;background-color: black;">
				<div style=" margin-top: 10px;">
					<p class="glyphicon glyphicon-copyright-mark"></p> 2018 All Reserved Design By Balittas
				</div>
			</div>
	</footer>
	<script>
		function hvr(dom, action)
		{
		    if (action == 'in')
		    {
		        $(dom).find("[col=g]").css("display", "none");
		        $(dom).find("[col=b]").css("display", "block");
		    }

		    else
		    {
		        $(dom).find("[col=b]").css("display", "none");
		        $(dom).find("[col=g]").css("display", "block");
		    }
		}

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