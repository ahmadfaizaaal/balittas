<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Balittas</title>
		<meta charset="utf-8">		
		<meta name="description" content="A Tuts+ course">
		<meta name="author" content="Gusna Ikhsan">		
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		
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
				<a href="" style="text-decoration-line:none;"><h3 class="text-left" style="color:black; font-family: Minion Pro">Menurut <?php echo $kategori; ?></h3></a>
				<hr style="border-color: grey;margin-top: -8px;">
					<table class="table table-hover">
						<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
							<th>No</th>
							<th>Varietas</th>
							<th><?php echo $kategori; ?></th>							
						</thead>
						<tbody>
						<?php 
							$count = 1;
							foreach ($dataJenisTembakau as $row) {
								
						 ?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><a href="" style="text-decoration-line:none;" class="teknologiBudidaya"><b><?php echo $row->nama_varietas ?></b></a></td>
								<td><?php echo $row->detail_value; ?></td>								
							</tr>
						<?php 
							$count++;
							}
						 ?>
							<!-- <tr>
								<td>2</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>								
							</tr>
							<tr>
								<td>3</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>								
							</tr>
							<tr>
								<td>4</td>
								<td>N1</td>
								<td>20 Agustus 2018</td>								
							</tr> -->
						</tbody>
					</table>				
				</div>				
				<div class="col-sm-3 col-lg-3">
					<br>
					<h3 class="text-left" style="color:black;font-family: Minion Pro">Pencarian</h3>
					<hr style="border-color: grey;margin-top: -8px;">
					<div class="container-fluid" style="background-color:rgba(28,69,26,0.9);border-radius: 5px;">
						<form method="get" action="<?php echo base_url('pencarian')?>" style="margin-top: 15px; margin-bottom: 15px;">
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
					<a href="<?php echo base_url() ?>leaflet" style="text-decoration-line:none;"><h3 class="text-left" style="color:black;font-family: Minion Pro">Leaflet</h3></a>
					<hr style="border-color: grey;margin-top: -8px;">					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">													 
							<img class="leafletImg" src="<?php echo base_url() ?>item img/1a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img class="leafletImg" src="<?php echo base_url() ?>item img/1b.jpg" class="image" style="width: 110%;border-radius: 3px; margin-left: -10px;">
						</div>						
					</div>					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">												 
							<img class="leafletImg" src="<?php echo base_url() ?>item img/2a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img class="leafletImg" src="<?php echo base_url() ?>item img/2b.jpg" class="image" style="width: 110%;border-radius: 3px; margin-left: -10px;">
						</div>						
					</div>					
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">												 
							<img class="leafletImg" src="<?php echo base_url() ?>item img/3a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img class="leafletImg" src="<?php echo base_url() ?>item img/3b.jpg" class="image" style="width: 110%;border-radius: 3px; margin-left: -10px;">
						</div>						
					</div>
					<h5 style="color:black;">Penyakit Lanas</h5>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-lg-6">												 
							<img class="leafletImg" src="<?php echo base_url() ?>item img/2a.jpg" class="image" style="width: 110%;border-radius: 3px;">						
						</div> 
						<div class="col-xs-6 col-sm-6 col-lg-6">
							<img class="leafletImg" src="<?php echo base_url() ?>item img/2b.jpg" class="image" style="width: 110%;border-radius: 3px; margin-left: -10px;">
						</div>						
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
	</body>	
	<br><br><br>
	
</html>