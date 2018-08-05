<!DOCTYPE html>
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
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		

		<!-- CONTENT -->
		<div class="container">
			<ul class="breadcrumb" style="margin-bottom: 0px;margin-top: 15px;">
				<li><a href="<?php echo base_url() ?>">Beranda</a></li>
				<li><a href="<?php echo base_url() ?>">Varietas</a></li>
				<li class="active">Detail Varietas</li>
			</ul>
			<div class="row">
				<div class="col-sm-9 col-lg-9">
					<hr style="border-color: grey;margin-top: 3px;">
					<?php 
						foreach ($varietas as $rowA) {
						
					 ?>
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="thumbnail" style=" border-radius: 5px; background-color: rgba(36,112,101,0.1);">
									<img src="<?php echo base_url() ?>assets/varietas/<?php echo $rowA->file_gambar; ?>" alt="" style="width: 100%;border-radius: 3px;">
									<br>
									<div class="container-fluid">
									<span class="label label-success"><p class="glyphicon glyphicon-calendar"></p> <?php echo $rowA->tanggal_upload ?></span>
									<span class="label label-warning"><p class="glyphicon glyphicon-time"></p> <?php echo $rowA->waktu_upload; ?></span>										
									<h4 style="color:rgb(242,97,5);font-size: 24px; font-family: Minion Pro;"><?php echo $rowA->nama_varietas; ?></h4>									
									<p style="text-indent: 0.5in; text-align: justify;"><?php echo $rowA->narasi; ?></p>

									<br>
									<p><b>Spesifikasi Varietas :</b></p>
										<table class="table table-hover">
											<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
												<th class="text-center">No</th>
												<th class="text-center">Atribut</th>
												<th class="text-center">Keterangan</th>
											</thead >
											<tbody>
											<?php 
												$count = 1;
												foreach ($detailVarietas as $rowDetail) {
													
											 ?>
												<tr>
													<?php 
														if (empty($rowDetail->detail_value)) {
															$count-=1;
															echo "<td></td>";
															echo "<td style=\"font-weight: bold; font-style: italic;\">".$rowDetail->nama_atribut."</td>";
															echo "<td>".$rowDetail->detail_value."</td>";
														} else {
															echo "<td>".$count."</td>";
															echo "<td>".$rowDetail->nama_atribut."</td>";
															echo "<td>".$rowDetail->detail_value."</td>";
														}
													 ?>
													<!-- <td><?php //echo $count; ?></td>
													<td><?php //echo $rowDetail->nama_atribut; ?></td>
													<td><?php //echo $rowDetail->detail_value; ?></td> -->
												</tr>
											<?php 
											$count++;
											}
											 ?>
											</tbody>
										</table>
									<br>
									<p><b>Catatan:</b></p>
									<p>Surat Keputusan Pelepasan <b><?php echo $rowA->nama_varietas; ?></b> dapat diunduh <a href="<?php echo base_url() ?>assets/SK/<?php echo $rowA->file_SK; ?>" class="hoverThumbnail" style="text-decoration-line: none"><b>di sini</b></a>.</p>
									</div>
									<br>
									<br>
									<div style="text-align: right; margin-bottom: 10px;margin-right: 10px;">
									    <span style="font-size: 12px;">Bagikan &nbsp</span>
										<a href=""><span><img src="<?php echo base_url() ?>item img/fb.png" alt=""></span></a>
										<a href=""><span><img src="<?php echo base_url() ?>item img/twitter.png" alt=""></span></a>
										<a href=""><span><img src="<?php echo base_url() ?>item img/gplus.png" alt=""></span></a>
									</div>									
								</div>
						</div>							
					</div>

					<?php 
						}
					 ?>

				</div>
				<div class="col-sm-3 col-lg-3">
					
					<h3 class="text-left" style="color:black; margin-top: -25px; font-family: Minion Pro">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -8px;">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
						<form method="get" action="<?php echo base_url('pencarian')?>" style="margin-top: 15px; margin-bottom: 15px;">
							<div class="input-group" style="z-index: 0">
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
	</body>
	<br><br>
	
	
</html>