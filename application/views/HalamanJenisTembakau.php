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
						<li><a href="<?php echo base_url() ?>">Varietas</a></li>
						<li><a href="<?php echo base_url("varietas/jenistembakau/$url") ?>">Jenis Tembakau</a></li>
						<li class="active"><?php echo $kategori; ?></li> 
					</ul>
					<h3 class="text-left" style="color:black; font-family: Minion Pro">Berdasarkan <?php echo $kategori; ?></h3>
					<hr style="border-color: grey;margin-top: -8px;">

				
					<?php 
						if ($kategori == "Kegunaan" || $kategori == "Daerah Penanaman") { ?>
							<table class="table table-hover">
								<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
									<th>No</th>
									<th class="text-center">Jenis</th>
									<th class="text-center"><?php echo $kategori; ?></th>							
								</thead>
								<tbody>
								<?php 
									for ($i = 0; $i < count($jenisVarietas); $i++) {
								 ?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td style="color:rgb(242,97,5);"><b><?php echo $jenisVarietas[$i]; ?></b></td>
										<td><?php echo $value[$i]; ?></td>								
									</tr>
								<?php 
									}
								 ?>
								</tbody>
							</table>
					<?php 
							if ($kategori == "Kegunaan") {
								echo "<br>
									<p><b>Catatan:</b></p>
									<p><b>*Shag</b> = tembakau rajangan halus untuk rokok tingwe (linting dewe).</p>";
							}

						} else if ($kategori == "Asal-usul" || $kategori == "Daerah Pengembangan") { ?>
							<table class="table table-hover">
								<thead style="background-color: rgba(28,69,26,0.9);border-bottom: 3px solid white; color:#fece00;">
									<th class="text-center">No</th>
									<th class="text-center">Varietas</th>
									<th class="text-center"><?php echo $kategori; ?></th>							
								</thead>
								<tbody>
								<?php 
									if($this->uri->segment(4)){
					                     $count = $this->uri->segment(4);
					                } else{
					                     $count = 0;
					                }
									
									foreach ($dataJenisTembakau as $row) {
										$count++;
								 ?>
									<tr>
										<td><?php echo $count; ?></td>
										<td><a href="<?php echo base_url('varietas/detailvarietas/').urlencode(strtolower($row->nama_varietas)) ?>" style="text-decoration-line:none;" class="teknologiBudidaya" title="Klik untuk melihat detil varietas"><b><?php echo $row->nama_varietas ?></b></a></td>
										<td><?php echo $row->detail_value; ?></td>								
									</tr>
								<?php 
									// $count++;
									}
								 ?>
								</tbody>
							</table>
							<br>
							<div>
								<ul class="paginationKu pagerCustom" >
									<?php foreach ($links as $link) {
										echo "<li>". $link."</li>";
										// echo $jumlah;
									} ?>
								</ul>
							</div>
					<?php
						} else if ($kategori == "Waktu Tanam") { ?>
							<button class="accordion actived" style="border-bottom: 2px solid white;"><strong>Perencanaan Waktu Tanam Tembakau Virginia</strong></button>
							<div class="container-fluid panel" style="display: block;">
								<br>
								 <p style="text-indent: 0.5in;">Periode kering digunakan untuk menentukan waktu tanam tembakau virginia. Umur
										tanaman tembakau virginia sekitar 120 hari (12 dasarian) dan dibutuhkan periode kering
										sekitar 2 bulan terakhir. Periode kering pada daerah pengembangan tembakau virginia lebih
										dari 12 dasarian dan cukup panjang untuk kebutuhan pemasakan daun dan panen.
										Waktu tanam dapat dimulai awal musim kemarau untuk menghindari genangan air dan
										paling lambat 12 dasarian sebelum akhir musim kemarau. Awal waktu tanam sama dengan
										awal musim kemarau (Tabe1 1). Oleh karena masa tanam tembakau pada periode
										kering, sehingga diperlukan air irigasi untuk memenuhi kebutuhan air tanaman. Anjuran
										waktu tanam tembakau virginia di atas bersifat patokan umum yang didasarkan peluang
										dan rata-rata curah hujan dan bersifat normal.</p>
								<p style="text-indent: 0.5in;">Dalam skala operasional pengelolaan tanaman diperlukan informasi prakiraan cuaca
										untuk musim tanam bersangkutan, apakah awal musim kemarau maju atau mundur
										ataukah lebih kering atau lebih basah dari keadaan normal. Informasi prakiraan cuaca dapat
										diperoleh di www.bmkg.go.id untuk seluruh wilayah tembakau virginia di Indonesia
										dan khusus di Jawa Timur dapat mengakses di <a href="http://www.staklimkarangploso.net" target="blank" style="font-style: italic; color: #5cb85c; text-decoration-line: none;">http://www.staklimkarangploso.net</a>, Informasi
										tersebut diharapkan telah diketahui sebelum menebar benih tembakau sampai saat
										menjelang panen. Contoh informasi hasil prakiraan awal musim kemarau tahun 2011 dari
										BMKG yang telah di upload pada hari Kamis, 25 Maret 2011, pukul 14:06 administrator
										Publikasi–Klimatologi (Gambar 5). Dari gambar 5 diketahui bahwa Kabupaten Bojonegoro
										(Zona 88) berwarna hijau artinya prakiraan awal musim kemarau mundur 2 dasarian/
										dekade dari rata-ratanya April II/III, yaitu Mei I/II. Lamongan (Zona 90) berwarna putih/
										abu-abu artinya prakiraan awal musim kemarau mundur 1 dasarian dari rata-ratanya
										April I/II (Utara) dan Mei II (Selatan), yaitu April II/III (Utara) dan Mei III (Selatan).
										Ngawi (Zona 87) berwarna kuning artinya prakiraan awal musim kemarau sama dengan
										rata-ratanya yaitu Mei I/II.</p>
								<br>
								<p style="color: #5cb85c;"><b>Catatan:</b></p>
								<p>File monograf <b>Perencanaan Waktu Tanam Tembakau Virginia</b> dapat diunduh <a href="<?php echo base_url() ?>assets/SK/file.pdf" target="blank" class="hoverThumbnail" style="text-decoration-line: none"><b>di sini</b></a>.</p>
								<br>
							</div>

							<button class="accordion" style="border-bottom: 2px solid white;"><strong>Waktu Tanam Tembakau Temanggung</strong></button>
							<div class="container-fluid panel">
								<br>
								<p style="text-indent: 0.5in;">Musim kemarau digunakan sebagai patokan dalam menentukan waktu tanam tembakau temanggung. Umur tanaman tembakau temanggung termasuk prosesing sekitar 140-150 hari (14-15 dasarian) dan dibutuhkan periode kering sekitar 7-8 dasarian terakhir. Periode kering pada daerah pengembangan tembakau temanggung sekitar 9-15 dasarian(tabel 1) dan cukup waktu untuk kebutuhan pemasakan daun, panen, dan prosesing. Waktu tanam paling awal dihitung minimal 6 dasarian dari awal musim kemarau. Waktu tanam paling lambat dihitung 15 dasarian sebelum akhir musim kemarau. Oleh karena periode kering terbatas, waktu tanam dilaksanakan pada musim hujan. Waktu tanam paling awal sckitar Maret III-April II dan paling lambat April II-Mei II</p>
								<br>
								<p style="color: #5cb85c;"><b>Catatan:</b></p>
								<p>File monograf <b>Waktu Tanam Tembakau Temanggung</b> dapat diunduh <a href="<?php echo base_url() ?>assets/SK/file.pdf" target="blank" class="hoverThumbnail" style="text-decoration-line: none"><b>di sini</b></a>.</p>
								<br>
							</div>

							<button class="accordion" style="border-bottom: 2px solid white;"><strong>Implikasi Penentuan Waktu Tanam Tembakau Madura</strong></button>
							<div class="container-fluid panel">
								<br>
							  	<p style="text-indent: 0.5in;">Penentuan waktu tanam tembakau madura tersebut bersifat patokan yang didasarkan peluang
										dan rata-rata curah hujan normal. Pengaturan waktu tanam tembakau madura sangat penting untuk
										mencapai hasil yang tinggi dengan mutu yang dikehendaki konsumen. Dalam skala operasional dapat
										dipadukan dengan hasil penelitian pemberian air pada tanaman tembakau madura terutama untuk
										menghindari kekeringan. Informasi ini diharapkan telah diketahui oleh pengguna sebelum
										kegiatan menebar benih dan saat menjelang panen.</p>
								<p style="text-indent: 0.5in;">Tembakau gunung ditanam pada musim penghujan dan kebutuhan aimya hanya dipenuhi dari
										curah hujan selama fase vegetatif. Waktu tanamnya dianjurkan tanam mengikuti seri I dimana
										peluang 75% diharapkan akan lebih pasti mendapat hujan dibanding normalnya. Tembakau tegal
										dan sawah yang mendapat tambahan air siraman dianjurkan mengikuti lanam seri II. Tembakau
										sawah dengan permukaan air tanah dangkal sekitar 2 meter dianjurkan mengikuti tanam seri III.</p>
								<p style="text-indent: 0.5in;">Anjuran pemberian air tanaman tembakau madura pada tanah tegal adalah 0,5 l/tanaman/pemberian
										dengan pemberian tiap hari sampai umur 20 hari, dan diikuti penyiraman 2,0 l/tanaman/pemberian/
										yang diberikan pada periode 21-40 hari (tiap dua hari), 41-50 hari (tiap hari). 51-54 hari (tiap
										2 hari), dan 50-60 hari (tiap 3 hari) atau total pemberian air sebesar 174 mm (Rachman et al.,
										1993).</p>
								<p style="text-indent: 0.5in;">Anjuran pemberian air tanaman tembakau madura pada tanah sawah adalah 0,25 l/tanaman/pemberian
										dengan pernberian tiap hari sampai umur 20 hari, dan diikuti penyiraman 0,66 l/tanaman/
										pemberian yang diberikan pada periode 21-40 hari (tiap 2 hari). 41-50 hari (tiap hari), 51-
										54 hari (tiap 2 hari), dan 50-60 hari (tiap 3 hari) atau total pemberian air sebesar 63 mm (Ilyas, 1993).
										</p>
								<br>
								<p style="color: #5cb85c;"><b>Catatan:</b></p>
								<p>File monograf <b>Implikasi Penentuan Waktu Tanam Tembakau Madura</b> dapat diunduh <a href="<?php echo base_url() ?>assets/SK/file.pdf" target="blank" class="hoverThumbnail" style="text-decoration-line: none"><b>di sini</b></a>.</p>
								<br>
							</div>
					<?php
						}
					?>				
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
			//-------------------------------------------MODAL LEAFLET SAMPING--------------------------------------
			var modal = document.getElementById('myModal');
			var max = document.getElementsByClassName("leafletImg");
			for (var i = 0; i < max.length; i++) {
				var img = document.getElementsByClassName("leafletImg")[i];
				var modalImg = document.getElementById("imgModal");
				img.onclick = function(){
				    modal.style.display = "block";
				    modalImg.src = this.src;
				}
			}
			var span = document.getElementsByClassName("closeModal")[0];
			span.onclick = function() { 
			    modal.style.display = "none";
			}

			//-----------------------------------------SCRIPT ACCRODION----------------------------------------------
			var acc = document.getElementsByClassName("accordion");
			for (var i = 0; i < acc.length; i++) {
			    acc[i].addEventListener("click", function() {
			        this.classList.toggle("actived");
			        var panelAccordion = this.nextElementSibling;
			        if (panelAccordion.style.display === "block") {
			            panelAccordion.style.display = "none";
			        	this.setAttribute('title', 'Klik untuk lebih detil');
			        } else {
			            panelAccordion.style.display = "block";
						this.setAttribute('title', 'Klik untuk menyembunyikan');
			        }
			    });
			}

		</script>
	<!-- END OF MODALS -->
	</body>	
	<br><br><br>
	
</html>