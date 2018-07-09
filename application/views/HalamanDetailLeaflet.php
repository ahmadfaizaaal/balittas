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

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<style>
			.leafletImg {
			    cursor: pointer;
			    transition: 0.3s;
			}

			.leafletImg:hover {opacity: 0.7;}

			/* The Modal (background) */
			.modal {
			    display: none; /* Hidden by default */
			    position: fixed; /* Stay in place */
			    z-index: 1; /* Sit on top */
			    padding-top: 100px; /* Location of the box */
			    left: 0;
			    top: 0;
			    width: 100%; /* Full width */
			    height: 100%; /* Full height */
			    overflow: hidden; /* Enable scroll if needed */
			    background-color: rgb(0,0,0); /* Fallback color */
			    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
			}

			/* Modal Content (image) */
			.modal-content {
			    margin: auto;
			    display: block;
			    width: 80%;
			    max-width: 700px;
			}

			/* Caption of Modal Image */
			#caption {
			    margin: auto;
			    display: block;
			    width: 80%;
			    max-width: 700px;
			    text-align: center;
			    color: #ccc;
			    padding: 10px 0;
			    height: 150px;
			}

			/* Add Animation */
			.modal-content, #caption {    
			    -webkit-animation-name: zoom;
			    -webkit-animation-duration: 0.6s;
			    animation-name: zoom;
			    animation-duration: 0.6s;
			}

			@-webkit-keyframes zoom {
			    from {-webkit-transform:scale(0)} 
			    to {-webkit-transform:scale(1)}
			}

			@keyframes zoom {
			    from {transform:scale(0)} 
			    to {transform:scale(1)}
			}

			/* The Close Button */
			.close {
			    position: absolute;
			    top: 15px;
			    right: 35px;
			    color: #fff;
			    font-size: 40px;
			    font-weight: bold;
			    transition: 0.3s;
			}

			.close:hover,
			.close:focus {
			    color: #bbb;
			    text-decoration: none;
			    cursor: pointer;
			}

			/* 100% Image Width on Smaller Screens */
			@media only screen and (max-width: 700px){
			    .modal-content {
			        width: 100%;
			    }
			}
		</style>
	</head>	
	<body>
		<header>			
			<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgba(28,69,26,1);">
				<div class="container-fluid">
				    <div class="navbar-header">
				    <div></div>
				      <img src="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" alt="" style="width: 20%;margin-top: 5px;margin-bottom: 5px;" class="image">
				      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
				    </div>
				    <!-- <ul class="nav navbar-nav">
				      <li class="active"><a href="#">Home</a></li>
				      <li><a href="#">Page 1</a></li>
				      <li><a href="#">Page 2</a></li>
				    </ul> -->
				    <ul class="nav navbar-nav navbar-right" style="margin-top: 8px;margin-right: 75px;">
				      	<li style="margin-top: -2px;"><a href="#" class="glyphicon glyphicon-home"></a></li>				      	
				      	<li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Jenis Tembakau <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					        	<li><a href="#">Page 1-1</a></li>
					          	<li><a href="#">Page 1-2</a></li>
					          	<li><a href="#">Page 1-3</a></li>
					       	</ul>
				      	</li>
				      	<li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					        	<li><a href="#">Page 1-1</a></li>
					          	<li><a href="#">Page 1-2</a></li>
					          	<li><a href="#">Page 1-3</a></li>
					       	</ul>
				      	</li>
				      	<li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Teknologi Budidaya <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					        	<li><a href="#">Page 1-1</a></li>
					          	<li><a href="#">Page 1-2</a></li>
					          	<li><a href="#">Page 1-3</a></li>
					       	</ul>
				      	</li>
				      	<li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Agribisnis <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					        	<li><a href="#">Page 1-1</a></li>
					          	<li><a href="#">Page 1-2</a></li>
					          	<li><a href="#">Page 1-3</a></li>
					       	</ul>
				      	</li>				     					      				     				      				      
				    </ul>
				  </div>
			</nav>
			 
			<!-- Gambar tengah -->					
			<div class="pcc">
				<!-- <img src="gambar/keten.jpg" class="img-responsive" id="logotengah"> -->
				 <p style="padding-top: 90px;">Detail Leaflet<p>
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
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
						<form action="" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group">
							    <input type="text" class="form-control" placeholder="Cari">
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
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
		<div id="myModal" class="modal">
		  <span class="close" style="margin-top: 50px; margin-left: 15px;">&times;</span>
		  <img class="modal-content" id="img01">
		</div>
		<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var max = document.getElementsByClassName("leafletImg");
		for (var i = 0; i < max.length; i++) {
			var img = document.getElementsByClassName("leafletImg")[i];
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			    // captionText.innerHTML = this.alt;
			}
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

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

