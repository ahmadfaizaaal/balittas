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
					  	<li><a href="<?php echo base_url() ?>">Beranda</a></li>
						<li class="active">Produk</li> 
					</ul>
				<h3 class="text-left" style="color:black; font-family: Minion Pro"><?php echo $kategori; ?></h3>
				<hr style="border-color: grey;margin-top: -8px;">
					<table class="table table-hover" >
						<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
							<th>No</th>
							<th>Varietas</th>
							<th>Persediaan sampai</th>
							<th>Jumlah (gr)</th>
						</thead >
						<tbody>
						<?php 
							if($this->uri->segment(3)){
			                     $count = $this->uri->segment(3);
			                } else{
			                     $count = 0;
			                }

							foreach ($dataBenih as $row) {
								$count++;	
						 ?>
							<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $row->nama_benih; ?></td>
								<td><?php echo $row->stok_sampai; ?></td>
								<td><?php echo $row->jumlah_stok ?></td>
							</tr>
						<?php 
							}
						 ?>
						</tbody>
					</table>
					<br>
					<ul class="paginationKu pagerCustom" >
						<?php foreach ($links as $link) {
							echo "<li>". $link."</li>";
							// echo $jumlah;
						} ?>
					</ul>
					<br>

					<!-- DISTRIBUSI BENIH -->				
					<h3 class="text-left" style="color:black; font-family: Minion Pro">Distribusi Benih UPBS</h3>
					<hr style="border-color: grey;margin-top: -8px;">
					<!-- <div class="container-fluid"> -->
						<div class="row">
							<div class="col-xs-4 col-sm-8 col-lg-8">
								<h5 class="text-right" style="margin-left: 20px;"><b>Filter by :</b></h5>
							</div>
							<div class="col-xs-4 col-sm-2 col-lg-2 text-right">
							    <select class="form-control bulan" id="bulan" name="bulan" style="margin-left: 13px;" onchange="filter();">
							        <option disabled>Bulan</option>
							        <option value="Januari" selected>Januari</option>
								<?php
									$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember","--Semua--");
									for($i = 1;$i < count($bulan);$i++){
										echo"<option value=$bulan[$i]> $bulan[$i] </option>";
									}
								?>
							    </select>
							</div>
							<div class="col-xs-3 col-sm-2 col-lg-2 text-right">
								<select class="form-control tahun" id="tahun" name="tahun" onchange="filter();">
							    	<option disabled>Tahun</option>
							    	<option value="2009" selected>2009</option>
							    	<?php
										for($i = 2010;$i <= 2050;$i++){
											echo"<option value=$i> $i </option>";
										}
									?>
							    </select>
							</div>
							<!-- <div class="col-xs-1 col-sm-1 col-lg-1 text-right">
							    <button class="btn btn-success" type="submit">Lihat</button>
							</div> -->
						<!-- </div> -->
					</div>
					<br>
					<div id="table-data">
						<table class="table table-hover">
							<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
								<th>No.</th>
								<th>Varietas</th>
								<th>Tanggal</th>
								<th>Tahun Panen</th>
								<th>Kelas Benih</th>
								<th class="text-center">Jumlah (Kg)</th>
								<th>Keterangan</th>
							</thead >
							<tbody>
							<?php 
								// if($this->uri->segment(3)){
				    //                  $count = $this->uri->segment(3);
				    //             } else{
				                     $count = 0;
				    //             }

								$jumlah = 0;

								foreach ($dataDistribusiBenih as $row) {
									$count++;
									$jumlah += $row->jumlah_kg;
									$keterangan = "";
									if (!empty($row->keterangan)) {
										$keterangan = substr($row->keterangan, 0, 20)." ...";
									} else {
										$keterangan = $row->keterangan;
									}	
							 ?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><?php echo $row->nama_benih; ?></td>
									<td><?php echo $row->tanggal; ?></td>
									<td><?php echo $row->tahun_panen; ?></td>
									<td><?php echo $row->kelas_benih; ?></td>
									<td class="text-center"><?php echo $row->jumlah_kg; ?></td>
									<td title="<?php echo $row->keterangan; ?>"><?php echo $keterangan; ?></td>
								</tr>
							<?php 
								}
							 ?>
							 	<tr style="background-color: rgba(28,69,26, 0.3);">
							 		<td></td>
							 		<td></td>
							 		<td></td>
							 		<td style="font-weight: bold;">JUMLAH</td>
							 		<td></td>
							 		<td class="text-center" style="font-weight: bold;"><?php echo number_format($jumlah, 3); ?></td>
							 		<td></td>
							 	</tr>
							</tbody>
						</table>
					</div>
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
					<a href="<?php echo base_url() ?>leaflet" style="text-decoration-line:none;" title="Klik untuk menuju halaman leaflet"><h3 class="text-left" style="color:black;font-family: Minion Pro">Leaflet</h3></a>
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
		<!-- END OF MODALS -->

		function filter(){
			var acuan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember","--Semua--"];
			var bulan = $("#bulan").val();
			for (var i = 0; i < acuan.length; i++) {
				if (bulan == acuan[i]) {
					if (i < 9) {
						bulan = "0" + (i+1);
					} else {
						if (i == 12) {
							bulan = "_%_%";
						} else {
							bulan = (i+1);
						}
					}
				}
			}
			var tahun = $("#tahun").val();
			// alert(bulan);
		    $.ajax({
		        type:"POST",
		        url: "../produk/filterDistribusi",
		        data: "tahun_bulan=" + tahun + "-" + bulan,
		        dataType : "html",
		        success:function(msg){
		            $("#table-data").html(msg);                
		        },
		        error:function(){
					alert("Search failed");
				}
		  	});
		 //  	var input, filter, table, tr, td, i;
			// table = document.getElementById("tabelku");
			// tr = table.getElementsByTagName("tr");
			// for (i = 0; i < tr.length; i++) {
			//   td = tr[i].getElementsByTagName("td")[2];
			//   if (td) {
			//     if ((td.innerHTML.toUpperCase().indexOf(bulan) > -1) && (td.innerHTML.toUpperCase().indexOf(tahun) > -1))  {
			//       tr[i].style.display = "";
			//     } else {
			//       tr[i].style.display = "none";
			//     }
			//   }       
			// }
		}
		</script>
	</body>	
	<br><br><br>
	
</html>