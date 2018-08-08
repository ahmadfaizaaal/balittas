<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<!-- <link href="<?php //echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon"> -->

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<!-- <div class="thetop"></div> -->
		
		<br>
		<!-- content -->
		<div class="container">
			<div class="row">		
				<div class="col-sm-9 col-lg-9">
				    <ul class="breadcrumb" style="margin: -6px 0px -10px -15px;">
					  	<li class="active">Beranda</li> 
					  	<li></li>
					</ul>
				<h3 class="text-left" style="color:black; font-family: Minion Pro">Varietas Terbaru</h3>
				<hr style="border-color: grey; margin-top: -8px;">
				<div class="row">
					<?php 
						foreach ($varietas as $row) {
							$namaVarietas = ""; $narasi = "";
							if (strlen($row->nama_varietas) > 22) {
								$namaVarietas = substr($row->nama_varietas, 0, 22)." ...";
							} else {
								$namaVarietas = $row->nama_varietas;
							}

							
					 ?>
					<div class="col-xs-12 col-sm-4 col-lg-4"> 
						<div class="thumbnail thumbku" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
							<a href="<?php echo base_url('varietas/detailvarietas/').urlencode(strtolower($row->nama_varietas)) ?>" style="text-decoration-line: none;">
								<?php 
									if (empty($row->file_gambar)) { ?>
										<img src="<?php echo base_url() ?>assets/varietas/tembakau.jpg" alt="" style="width: 100%;">
								<?php 
									} else { ?>
										<img src="<?php echo base_url() ?>assets/varietas/<?php echo $row->file_gambar; ?>" alt="" style="width: 100%;">
								<?php 
									}
								 ?>
								<!-- <img src="<?php //echo base_url() ?>assets/varietas/<?php //echo $row->file_gambar; ?>" alt="" style="width: 100%;"> -->
								<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> <?php echo $row->tanggal_upload ?></span>
								<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> <?php echo $row->waktu_upload; ?></span>	
								<h4 style="color:#fece00;" title="<?php echo $row->nama_varietas; ?>"><?php echo $namaVarietas; ?></h4>
							</a>
							
							<!-- DESKRIPSI -->
							<?php 
								if (!empty($row->narasi)) {
									$narasi = substr($row->narasi, 0, 25)." [..]";
									echo "<p>&nbsp $narasi</p>";
								} else {
									$narasi = "Belum ada deskripsi";
									echo "<p style=\"font-style: italic; color:lightgrey;\">&nbsp $narasi</p>";
								}
							 ?>
							
							<br>							
							<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
								<a href="<?php echo base_url('varietas/detailvarietas/').urlencode(strtolower($row->nama_varietas)) ?>" style="text-decoration-line: none;" class="hoverThumbnail"><i>Selengkapnya</i></a>
							</div>
						</div>						
					</div>
					<?php 
						}
					 ?>
				</div>
					<ul class="paginationKu pagerCustom" >
						<?php foreach ($links as $link) {
							echo "<li>". $link."</li>";
						} ?>
					</ul>
					<br>
				</div>				
				<div class="col-sm-3 col-lg-3">
					<br>
					<h3 class="text-left" style="color:black;font-family: Minion Pro">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -8px;">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
						<form method="get" action="<?php echo base_url('pencarian'); ?>" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0;">
							    <input type="text" class="form-control" placeholder="Cari" required>
							    <div class="input-group-btn">
							      <button class="btn btn-success" type="submit">
							        <i class="glyphicon glyphicon-search"></i>
							      </button>
							    </div>
							 </div>
						</form>						
					</div>
					<a href="<?php echo base_url('leaflet') ?>" style="text-decoration-line:none;" title="Klik untuk menuju halaman leaflet"><h3 class="text-left" style="color:black;font-family: Minion Pro">Leaflet</h3></a>
					<hr style="border-color: grey;margin-top: -8px;">
					<?php 
						$ganjil = true;
						foreach ($subLeaflet as $leafletSide) {
							if ($ganjil) {
							
					?>	
					<h5 style="color:black;"><?php echo $leafletSide->nama_leaflet; ?></h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">													 
							<img class="leafletImg" src="<?php echo base_url() ?>assets/leaflet/<?php echo $leafletSide->file; ?>" class="image" style="width: 110%;border-radius: 3px;">						
						</div>
					<?php 	$ganjil = false; } else { ?> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img class="leafletImg" src="<?php echo base_url() ?>assets/leaflet/<?php echo $leafletSide->file; ?>" class="image" style="width: 110%;border-radius: 3px; margin-left: -10px;">
						</div>						
					</div>
					<?php $ganjil = true; } } ?>					
						
				</div>
			</div>
			</div> <!-- akhir div container atas -->
			<br>
			
	
			<div class="container-fluid" style="background-color: rgba(28,69,26,0.8);">
				<div class="container">
				<!-- Produk -->
				<h3 class="text-center" style="color:white;font-family: Minion Pro;">Produk</h3>
				<p class="text-center" style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda, facere. Alias deserunt pariatur magnam rerum quod voluptates, quidem id labore quam. Illum nemo minus repellat veritatis aliquid, consequatur, dolorem, laborum magnam voluptatibus consequuntur voluptate tempora! Vel, odio. Corporis nam maiores nemo, dicta temporibus et.</p>
				<br><br>
				<div class="row">
				    <div class="col-xs-6 col-sm-3 col-lg-3">
					    <a href="<?php echo base_url() ?>produk/benih" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none;" >
					    		<img src="<?php echo base_url() ?>item img/hazelnutWh.png" style="width: 40%" col="g">
					    		<img src="<?php echo base_url() ?>item img/hazelnutY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Benih</h4>
					    	</div>
					    </a>
				    </div>
				    <div class="col-xs-6 col-sm-3 col-lg-3">
					    <a href="<?php echo base_url() ?>produk/produk2" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
					    		<img src="<?php echo base_url() ?>item img/toolsWh.png" style="width: 40%" col="g">
					    		<img src="<?php echo base_url() ?>item img/toolsY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Alat & Mesin</h4>
					    	</div>
					    </a>
				    </div>
				    <div class="col-xs-6 col-sm-3 col-lg-3">
					    <a href="<?php echo base_url() ?>produk/produk1" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
					    		<img src="<?php echo base_url() ?>item img/flaskWh.png" style="width: 40%" col="g">
					    		<img src="<?php echo base_url() ?>item img/flaskY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Formula</h4>
					    	</div>
					    </a>
				    </div>
				    <div class="col-xs-6 col-sm-3 col-lg-3">
					    <a href="<?php echo base_url() ?>produk/produk2" style="text-decoration-line: none;" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
					    	<div class="thumbnail text-center produk" style="background-color: rgba(28,69,26,0); border-style: none">
					    		<img src="<?php echo base_url() ?>item img/pipeWh.png" style="width: 40%" col="g">
					    		<img src="<?php echo base_url() ?>item img/pipeY.png" style="width: 40%; display:none;" col="b">
					    		<br>
								<h4>Produk Hilir</h4>
					    	</div>
					    </a>
				    </div>
				</div>
				<br></div>
			</div>

			<br><br>
			<div class="container">
			<div class="row">
				<div class="col-sm-3 col-lg-3">
					<h3 class="text-center" style="color:black;margin-top: 0px;font-family: Minion Pro;">Teknologi Budidaya</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, quae iure blanditiis veniam adipisci, facilis ab necessitatibus! Reiciendis, praesentium, accusamus.</p>
				</div>
				<div class="col-sm-9 col-lg-9">
					<div class="row">
						<div class="col-sm-4 col-lg-4">
						 	<a href="<?php echo base_url('teknologibudidaya/penangkaranBenih'); ?>" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
							 		<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau2.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Penangkaran Benih </h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Pesemaian</h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau2.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Pemupukan</h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Pemupukan Bebas Chlor</h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau2.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Pengendalian Penyakit </h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Pengendalian Hama </h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau2.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Panen dan Pasca Panen </h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Kesesuaian Lahan </h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
						<div class="col-sm-4 col-lg-4">
						 	<a href="" style="text-decoration-line: none;" class="teknologiBudidaya">
						 		<div class="thumbnail" style="background-color: white; border-style: none">
						 			<div class="itemZoom" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
										<img src="<?php echo base_url() ?>item img/tembakau2.jpg" class="imageZoom" >
										<div class="itemZoom-overlay top"></div>
									</div>
									<h4 style="font-family: Minion Pro;">Budidaya Tembakau Cerutu</h4>
									<hr style="margin:-6px 0px 5px 0px; border-color: orange;">
									<div class="overlayhr"></div>
									<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure inventore nisi quo, praesentium aspernatur deleniti.</p>
						 		</div>
						 	</a>
						</div>
					</div>
				</div>				
			</div>
			<!-- <hr> -->
			<hr style="border-color: grey">
			<a href="" style="text-decoration-line:none;"><h3 class="text-center" style="color:black;font-family: Minion Pro;">Agribisnis</h3></a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perferendis, quas consectetur cum. Dolorum quae quam neque facere perspiciatis dignissimos. ipsum dolor sit amet, consectetur adipisicing elit. Distinctio accusantium perferendis eaque, aspernatur ex eos et ad dignissimos, voluptates beatae!</p>
			<br><br>
			<div class="row">
				<div class="col-sm-3 col-lg-3">
					<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="image img-rounded" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
				</div>
				<div class="col-sm-8 col-lg-8">
					<p style="font-size: 20px;color:rgb(242,97,5); font-family: Minion Pro;">Budidaya tembakau madura</p>
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
				<div class="col-sm-3 col-lg-3">
					<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="image img-rounded" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
				</div>
				<div class="col-sm-8 col-lg-8">
					<p style="font-size: 20px;color:rgb(242,97,5); font-family: Minion Pro;">Budidaya tembakau madura</p>
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
				<div class="col-sm-3 col-lg-3">
					<img src="<?php echo base_url() ?>item img/tembakau.jpg" class="image img-rounded" style="box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.2);">
				</div>
				<div class="col-sm-8 col-lg-8">
					<p style="font-size: 20px;color:rgb(242,97,5); font-family: Minion Pro;">Budidaya tembakau madura</p>
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
	<br><br><br><br>
	
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

		
	</script>
</html>