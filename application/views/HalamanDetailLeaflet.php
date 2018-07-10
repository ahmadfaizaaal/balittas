<!DOCTYPE <html>
<html>
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>	
	<body>
		<header>			
			<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(28,69,26,0.7);">
				<div class="container-fluid">
				    <div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">						    
				      <a href=""><img src="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" style="width: 55px;height:auto;" style=""></a>
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
			 
			<!-- Gambar tengah -->					
			<!-- <div class="pcc">
				<img src="gambar/keten.jpg" class="img-responsive" id="logotengah">
				 <p style="padding-top: 90px;">Detail Varietas<p>
			</div>			 -->
			<div class="containerImg">
				<img src="<?php echo base_url() ?>item img/tembakauHeader.jpg" alt="" style="width: 100%;">
			 	<div class="contentImg text-center">
				    <h1 style="margin-top: 140px;font-size: 60px;">Detail Leaflet</h1>				    
			  	</div>
			</div>	
		</header>

		<!-- CONTENT -->
		<div class="container">
			<ul class="breadcrumb" style="margin-bottom: 0px;margin-top: 15px;">
				<li>Beranda</li>
				<li>Berita</li>
			</ul>
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<hr style="border-color: black">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="height: 65%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/1a.jpg" alt="" style="width:100%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/1b.jpg" alt="" style="width: 100%; margin-top: 5px;">
								<!-- <a href="" style="text-decoration-line: none;">
								</a>				 -->
								<h4 style="color:rgb(242,97,5);">KONSERVASI LAHAN TEMBAKAU TEMANGGUNG</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="height: 65%;">
								<!-- <a href="" style="text-decoration-line: none;"> -->
									<img class="leafletImg" src="<?php echo base_url() ?>item img/2a.jpg" alt="" style="width: 100%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/2b.jpg" alt="" style="width: 100%; margin-top: 5px;">
								<!-- </a>				 -->
								<h4 style="color:rgb(242,97,5);">PENYAKIT KERUPUK/KERITING</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="height: 65%;">
								<!-- <a href="" style="text-decoration-line: none;"> -->
									<img class="leafletImg" src="<?php echo base_url() ?>item img/3a.jpg" alt="" style="width: 100%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/3b.jpg" alt="" style="width: 100%; margin-top: 5px;">
								<!-- </a>				 -->
								<h4 style="color:rgb(242,97,5);">PENYAKIT LANAS</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="height: 65%;">
								<!-- <a href="" style="text-decoration-line: none;"> -->
									<img class="leafletImg" src="<?php echo base_url() ?>item img/1a.jpg" alt="" style="width: 100%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/1b.jpg" alt="" style="width: 100%; margin-top: 5px;">
								<!-- </a>				 -->
								<h4 style="color:rgb(242,97,5);">KONSERVASI LAHAN TEMBAKAU TEMANGGUNG</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="height: 65%;">
								<!-- <a href="" style="text-decoration-line: none;"> -->
									<img class="leafletImg" src="<?php echo base_url() ?>item img/2a.jpg" alt="" style="width: 100%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/2b.jpg" alt="" style="width: 100%; margin-top: 5px;">
								<!-- </a>				 -->
								<h4 style="color:rgb(242,97,5);">PENYAKIT KERUPUK/KERITING</h4>
							</div>						
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4"> 
							<div class="thumbnail text-center" style="height: 65%;">
								<!-- <a href="" style="text-decoration-line: none;"> -->
									<img class="leafletImg" src="<?php echo base_url() ?>item img/3a.jpg" alt="" style="width: 100%;">
									<img class="leafletImg" src="<?php echo base_url() ?>item img/3b.jpg" alt="" style="width: 100%; margin-top: 5px;">
								</a>				
								<h4 style="color:rgb(242,97,5);">PENYAKIT LANAS</h4>
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
				</div>

				<div class="col-sm-3 col-lg-3">
					<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black; margin-top: -25px;">Pencarian</h3></a>
					<hr style="border-color: black">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9); border-radius: 5px;">
						<form action="" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0">
							    <input type="text" class="form-control" placeholder="Cari">
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit" style="color: #5cb85c;">
							        <i class="glyphicon glyphicon-search" style="color: white;"></i>.
							      </button>
							    </div>
							 </div>
						</form>						
					</div>
					<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;">Varietas Terbaru</h3></a>
					<hr style="border-color: black">
					<div class="beritaterbaru">
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:orange;font-size: 15px;">Jalan Sehat</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="<?php echo base_url() ?>item img/tembakau2.jpg" alt="" style="width: 100%;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 5px;">
					<div class="beritaterbaru">
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:orange;font-size: 15px;">Jalan Sehat</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="<?php echo base_url() ?>item img/tembakau2.jpg" alt="" style="width: 100%;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 5px;">
					<div class="beritaterbaru">
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:orange;font-size: 15px;">Jalan Sehat</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="<?php echo base_url() ?>item img/tembakau2.jpg" alt="" style="width: 100%;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
					<hr style="margin-top: 10px;margin-bottom: 5px;">
					<div class="beritaterbaru">
						<a href="" style="color:black;text-decoration-line: none;">
							<p style="color:orange;font-size: 15px;">Jalan Sehat</p>												
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-lg-5">
									<img src="<?php echo base_url() ?>item img/tembakau2.jpg" alt="" style="width: 100%;">	
								</div>
								<div class="col-xs-7 col-sm-7 col-lg-7">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nobis.</p>					
								</div>		
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- END OF CONTENT -->

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

	</body>
	<br><br>
	<footer>
		<div class="container-fluid" style="background-color: rgba(28,69,26,1);">
				<div class="container" style="margin-top: 20px; color:white;">
					<div class="col-sm-3 col-lg-3">
						<div class="row">
							<div class="col-xs-2 col-sm-2 col-lg-2">
								<img src="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" style="width: 230%;">
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
									<img src="<?php echo base_url() ?>item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="<?php echo base_url() ?>item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="<?php echo base_url() ?>item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
								</div>
								<div class="col-xs-3 col-sm-3 col-lg-3" style="margin: 0px -7px 9px 0px;">
									<img src="<?php echo base_url() ?>item img/1a.jpg" class="img-rounded" alt="Cinque Terre" width="50" height="50" >
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
					<p class="glyphicon glyphicon-copyright-mark"></p> 2018.All Reserved. Design By Balittas
				</div>
			</div>
	</footer>
	
</html>

