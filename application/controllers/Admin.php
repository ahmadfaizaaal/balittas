<?php 
	class admin extends CI_Controller{
		public function index(){
			$data['judul'] = "Balittas";
			$this->load->view('login', $data);
		}
		public function login(){			
			$username = $_POST['username']; 
			$password = $_POST['password'];			
			if ($username=="balittas"&&$password=="magang") {
				redirect(base_url('Admin/tembakau'));
			}else{
				$data['coba']="gusna";
				$data['judul'] = "Balittas";
				$this->load->view('login', $data);
			}			
		}
		public function tembakau(){		
			$this->load->model("m_tembakau");		
			$data['varietas_tembakau'] = $this->m_tembakau->get_varietas();
			$data['detail_varietas'] = $this->m_tembakau->get_all_detail_varietas();
			$data['listAtribut'] = $this->m_tembakau->getAtribut();
			$data['leaflet'] = $this->m_tembakau->get_leaflet();
			$data['gambarleaflet'] = $this->m_tembakau->get_leaflet_img();		
			$data['benih'] = $this->m_tembakau->get_benih();
			$data['distribusiBenih'] = $this->m_tembakau->get_distribusi_benih();
			$data['ListNamaBenih'] = $this->m_tembakau->get_nama_benih();
			$data['teknologi'] = $this->m_tembakau->get_tekbud();
			$data['agribisnis'] = $this->m_tembakau->get_agri();
			// $dataHeader['judul'] = "Admin";
			// $this->load->view("header",$dataHeader);
			$this->load->view("v_admin_tembakau",$data);
		}
	//========================================VARIETAS========================================
		public function deleteVarietas($id){			
			$this->load->model("m_tembakau");
			$datagambardansk = $this->m_tembakau->get_imgsk_varietas_byId($id);
			unlink('assets/varietas/'.$datagambardansk[0]->file_gambar);
			unlink('assets/SK/'.$datagambardansk[0]->file_SK);
			$this->m_tembakau->delete_varietas($id);
			redirect(base_url('admin/tembakau'));
		}		
		public function tambahVarietas(){
			$this->load->model("m_tembakau");

			date_default_timezone_set('Asia/Jakarta');
	        $tgl = date('Y-m-d'); 
	        $wkt = date('H:i:s');		

			$namaVarietas = $this->input->post('namaVarietas');		
			$deskripsi = $this->input->post('deskripsi');
			$tglPelepasan = $this->input->post('tanggalPelepasan');

			// upload gambar
			$targetpathgmbr = "assets/varietas/";
			$targetpathsk = "assets/SK/";
			$targetpathgmbr = $targetpathgmbr.basename($_FILES['gambar']['name']);
			$targetpathsk = $targetpathsk.basename($_FILES['sk']['name']);

			if(move_uploaded_file($_FILES['gambar']['tmp_name'],$targetpathgmbr)&&move_uploaded_file($_FILES['sk']['tmp_name'],$targetpathsk)) {      							
				$this->m_tembakau->add_varietas($namaVarietas,$tglPelepasan,$tgl,$wkt,$_FILES['sk']['name'],$_FILES['gambar']['name']);			
				$this->m_tembakau->add_deskripsi_varietas($deskripsi);
				for ($i=0; $i < $this->input->post('temp') ; $i++) { 
					$idAtribut = $this->m_tembakau->getIdAtribut($this->input->post('atribut'."$i"));
					if (!empty($idAtribut)) {
						$this->m_tembakau->add_detail_deskripsi($idAtribut,$this->input->post('value'."$i"));
					} else {
						$this->m_tembakau->addAtribut($this->input->post('atribut'."$i"));
						$idAtribut = $this->m_tembakau->getIdAtribut($this->input->post('atribut'."$i"));
						$this->m_tembakau->add_detail_deskripsi($idAtribut,$this->input->post('value'."$i"));
					}
				}				
				redirect(base_url('admin/tembakau'));	
			} else{      
				echo "There was an error uploading the file, please try again!";  
			}		
						
		}
		public function editVarietas(){
			$this->load->model("m_tembakau");

			$idVar = $this->input->post('idVarietas');
			$namaVarietas = $this->input->post('namaVarietas');
			$tgl = $this->input->post('tanggalPelepasan');					
			

			$targetpathgmbrpath = "assets/varietas/";
			$targetpathskpath = "assets/SK/";
			$targetpathgmbr = $targetpathgmbrpath.basename($_FILES['gambar']['name']);
			$targetpathsk = $targetpathskpath.basename($_FILES['sk']['name']);

			$datagambardansk = $this->m_tembakau->get_imgsk_varietas_byId($idVar);
			
			if (!empty($_FILES['gambar']['name'])&&!empty($_FILES['sk']['name'])) {
				unlink($targetpathgmbrpath.$datagambardansk[0]->file_gambar);
				unlink($targetpathskpath.$datagambardansk[0]->file_SK);
				move_uploaded_file($_FILES['gambar']['tmp_name'],$targetpathgmbr);
				move_uploaded_file($_FILES['sk']['tmp_name'],$targetpathsk);			
				$this->m_tembakau->updateVarietas($idVar,$namaVarietas,$tgl,$_FILES['sk']['name'],$_FILES['gambar']['name']);
			}elseif (empty($_FILES['gambar']['name'])&&empty($_FILES['sk']['name'])) {
				$this->m_tembakau->updateVarietasTanpaFile($idVar,$namaVarietas,$tgl);
			}elseif (empty($_FILES['sk']['name'])) {
				unlink($targetpathgmbrpath.$datagambardansk[0]->file_gambar);
				move_uploaded_file($_FILES['gambar']['tmp_name'],$targetpathgmbr);
				$this->m_tembakau->updateVarietasKecSK($idVar,$namaVarietas,$tgl,$_FILES['gambar']['name']);
			}elseif (empty($_FILES['gambar']['name'])) {
				unlink($targetpathskpath.$datagambardansk[0]->file_SK);
				move_uploaded_file($_FILES['sk']['tmp_name'],$targetpathsk);
				$this->m_tembakau->updateVarietasKecGmbr($idVar,$namaVarietas,$tgl,$_FILES['sk']['name']);
			}
			redirect(base_url('admin/tembakau'));
		}
		public function editDesVarietas(){
			$this->load->model("m_tembakau");

			$idSpe = $this->input->post('idSpesifikasi');
			$idDes = $this->input->post('idDeskripsi');		
			$deskripsi = $this->input->post('deskripsi');

			$this->m_tembakau->updateDesvarietas($idSpe,$deskripsi);

			for ($i=0; $i < $this->input->post('jumlahAtr') ; $i++) { 
				$idAtribut = $this->m_tembakau->getIdAtribut($this->input->post('atribut'."$i"));
				$this->m_tembakau->updateDetailDeskripsi($idDes, $idAtribut, $this->input->post('value'."$i"));
			}
			redirect(base_url('admin/tembakau'));
		}

	//========================================LEAFLET========================================
		public function tambahLeaflet(){
			$this->load->model("m_tembakau");

			$nama = $this->input->post('namaLeaflet');					
			$this->m_tembakau->add_leaflet_name($nama);	

			$targetpathleaflet = "assets/leaflet/";		
			$targetpathleaflet1 = $targetpathleaflet.basename($_FILES['gambar1']['name']);
			move_uploaded_file($_FILES['gambar1']['tmp_name'],$targetpathleaflet1);
			$this->m_tembakau->add_leaflet_img($_FILES['gambar1']['name']);	
				
			$targetpathleaflet2 = $targetpathleaflet.basename($_FILES['gambar2']['name']);
			move_uploaded_file($_FILES['gambar2']['tmp_name'],$targetpathleaflet2);
			$this->m_tembakau->add_leaflet_img($_FILES['gambar2']['name']);

			redirect(base_url('admin/tembakau'));
		}
		public function editLeaflet(){
			$this->load->model("m_tembakau");

			$idleaflet = $this->input->post('idleaflet');
			$idgmbr1 = $this->input->post('idimg1');		
			$idgmbr2 = $this->input->post('idimg2');	
			$nama = $this->input->post('namaLeaflet');							

			$dataleaflet1 = $this->m_tembakau->get_leaflet_img_byId($idgmbr1);
			$dataleaflet2 = $this->m_tembakau->get_leaflet_img_byId($idgmbr2);

			$targetpathleaflet = "assets/leaflet/";

			$this->m_tembakau->updateLeafletName($idleaflet,$nama);		
			if (empty($_FILES['leaflet1']['name'])&&empty($_FILES['leaflet2']['name'])) {			
			}elseif (!empty($_FILES['leaflet1']['name'])&&!empty($_FILES['leaflet2']['name'])) {
				unlink($targetpathleaflet.$dataleaflet1[0]->file);
				unlink($targetpathleaflet.$dataleaflet2[0]->file);
				$targetpathleaflet1 = $targetpathleaflet.basename($_FILES['leaflet1']['name']);
				move_uploaded_file($_FILES['leaflet1']['tmp_name'],$targetpathleaflet1);
				$targetpathleaflet2 = $targetpathleaflet.basename($_FILES['leaflet2']['name']);
				move_uploaded_file($_FILES['leaflet2']['tmp_name'],$targetpathleaflet2);
				$this->m_tembakau->updateLeafletImg($idgmbr1,$_FILES['leaflet1']['name']);
				$this->m_tembakau->updateLeafletImg($idgmbr2,$_FILES['leaflet2']['name']);			
			}elseif (!empty($_FILES['leaflet1']['name'])) {
				unlink($targetpathleaflet.$dataleaflet1[0]->file);
				$targetpathleaflet1 = $targetpathleaflet.basename($_FILES['leaflet1']['name']);
				move_uploaded_file($_FILES['leaflet1']['tmp_name'],$targetpathleaflet1);
				$this->m_tembakau->updateLeafletImg($idgmbr1,$_FILES['leaflet1']['name']);
			}elseif (!empty($_FILES['leaflet2']['name'])) {
				unlink($targetpathleaflet.$dataleaflet2[0]->file);
				$targetpathleaflet2 = $targetpathleaflet.basename($_FILES['leaflet2']['name']);
				move_uploaded_file($_FILES['leaflet2']['tmp_name'],$targetpathleaflet2);
				$this->m_tembakau->updateLeafletImg($idgmbr2,$_FILES['leaflet2']['name']);
			}
			redirect(base_url('admin/tembakau'));

		}
		public function deleteLeaflet($id){			
			$this->load->model("m_tembakau");
			$dataleaflet = $this->m_tembakau->get_leaflet_byId($id);
			$targetpathleaflet = "assets/leaflet/";
			unlink($targetpathleaflet.$dataleaflet[0]->file);
			unlink($targetpathleaflet.$dataleaflet[1]->file);
			$this->m_tembakau->delete_leaflet($id);
			redirect(base_url('admin/tembakau'));
		}

	//==========================================PRODUK=========================================
		// PRODUK BENIH
		public function tambahBenih(){
			$this->load->model("m_tembakau");

			$namabenih = $this->input->post('namabenih');		
			$stoksampai = $this->input->post('stoksampai');
			$jumstok = $this->input->post('jumlahstok');		
		
			$this->m_tembakau->add_benih($namabenih,$stoksampai,$jumstok);
			
			redirect(base_url('admin/tembakau'));
		}
		public function editBenih(){
			$this->load->model("m_tembakau");	

			$id = $this->input->post('idbenih');
			$namabenih = $this->input->post('editnamabenih');		
			$stoksampai = $this->input->post('editstoksampai');
			$jumlahstok = $this->input->post('editjumlahstok');	

			$this->m_tembakau->update_benih($id,$namabenih,$stoksampai,$jumlahstok);
			redirect(base_url('admin/tembakau'));
		}
		public function deleteBenih($id){			
			$this->load->model("m_tembakau");		
			$this->m_tembakau->delete_benih($id);
			redirect(base_url('admin/tembakau'));
		}

		// PRODUK DISTRIBUSI BENIH
		public function tambahDistribusiBenih(){
			$this->load->model("m_tembakau");
			date_default_timezone_set('Asia/Jakarta');
	        $tglsekarang = date('Y-m-d'); 

			$namadbenih = $this->input->post('namadistribusibenih');		
			$tgl = $this->input->post('tgldistribusi');
			$thn = $this->input->post('thnpanen');	
			$kelas = $this->input->post('kelasbenih');
			$jumlah = $this->input->post('jumlah');
			$ket = $this->input->post('keterangan');	
					
			$idBenih1 = $this->m_tembakau->get_id_nama_benih($namadbenih);
			if (!empty($idBenih1)) {
				$this->m_tembakau->add_distribusi_benih($idBenih1,$tgl,$thn,$kelas,$jumlah,$ket);			
			} else {			
				$this->m_tembakau->add_benih($namadbenih,$tglsekarang,0);
				$idBenih2 = $this->m_tembakau->get_id_nama_benih($namadbenih);
				$this->m_tembakau->add_distribusi_benih($idBenih2,$tgl,$thn,$kelas,$jumlah,$ket);
			}
			
			redirect(base_url('admin/tembakau'));
		}
		public function editDistribusiBenih(){
			$this->load->model("m_tembakau");	

			$iddistribusi = $this->input->post('iddistribusi');
			$idbenih = $this->input->post('iddistribusibenih');
			$tgl = $this->input->post('edittgldistribusi');		
			$thn = $this->input->post('editthnpanen');
			$kls = $this->input->post('editkelasbenih');	
			$jum = $this->input->post('editjumlah');
			$ket = $this->input->post('editketerangan');		

			$this->m_tembakau->update_distribusi_benih($iddistribusi,$tgl,$thn,$kls,$jum,$ket);
			redirect(base_url('admin/tembakau'));
		}
		public function deleteDistribusiBenih($id){			
			$this->load->model("m_tembakau");		
			$this->m_tembakau->delete_distribusi_benih($id);
			redirect(base_url('admin/tembakau'));
		}

	//========================================TEKNOLOGI========================================
		public function tambahTeknologi(){
			$this->load->model("m_tembakau");

			$jenis = $this->input->post('jenistekno');		
			$des = $this->input->post('destekno');					

			$targetpathtekno = "assets/teknologi/";		
			
			if (empty($_FILES['gambartekno']['name'])) {
				$gambartekno = "noImg.jpg";
				$this->m_tembakau->add_teknologi($jenis,$des,$gambartekno);
			}else{
				$targetpathteknologi = $targetpathtekno.basename($_FILES['gambartekno']['name']);
				move_uploaded_file($_FILES['gambartekno']['tmp_name'],$targetpathteknologi);
				$this->m_tembakau->add_teknologi($jenis,$des,$_FILES['gambartekno']['name']);
			}
			redirect(base_url('admin/tembakau'));
		}
		public function editTeknologi(){
			$this->load->model("m_tembakau");

			$id = $this->input->post('idtekno');
			$jenis = $this->input->post('editjenistekno');		
			$des = $this->input->post('editdestekno');				
			
			$targetpathtekno = "assets/teknologi/";	

			if (empty($_FILES['editgambartekno']['name'])) {			
				$this->m_tembakau->update_tekbud_noimg($id,$jenis,$des);
			}else{
				$datatekno = $this->m_tembakau->get_tekbud_byId($id);
				unlink($targetpathtekno.$datatekno[0]->gambar_tekno);
				$targetpathteknologi = $targetpathtekno.basename($_FILES['editgambartekno']['name']);
				move_uploaded_file($_FILES['editgambartekno']['tmp_name'],$targetpathteknologi);
				$this->m_tembakau->update_tekbud($id,$jenis,$des,$_FILES['editgambartekno']['name']);
			}		
			redirect(base_url('admin/tembakau'));
			
		}
		public function deleteTeknologi($id){			
			$this->load->model("m_tembakau");
			$targetpathtekno = "assets/teknologi/";
			$datatekno = $this->m_tembakau->get_tekbud_byId($id);
			unlink($targetpathtekno.$datatekno[0]->gambar_tekno);
			$this->m_tembakau->delete_tekbud($id);
			redirect(base_url('admin/tembakau'));
		}

	//========================================AGRIBISNIS========================================
		public function tambahAgribisnis(){
			$this->load->model("m_tembakau");

			$jenis = $this->input->post('jenisagri');		
			$des = $this->input->post('desagri');		
			
			$targetpathagri = "assets/agribisnis/";		
			
			if (empty($_FILES['gambaragri']['name'])) {
				$gambaragri = "noImg.jpg";
				$this->m_tembakau->add_agribisnis($jenis,$des,$gambaragri);
			}else{
				$targetpathagribisnis = $targetpathagri.basename($_FILES['gambaragri']['name']);
				move_uploaded_file($_FILES['gambaragri']['tmp_name'],$targetpathagribisnis);
				$this->m_tembakau->add_agribisnis($jenis,$des,$_FILES['gambaragri']['name']);
			}
			redirect(base_url('admin/tembakau'));
		}
		public function editAgribisnis(){
			$this->load->model("m_tembakau");

			$id = $this->input->post('idagri');
			$jenis = $this->input->post('editjenisagri');		
			$des = $this->input->post('editdesagri');		
			
			$targetpathagri = "assets/agribisnis/";	

			if (empty($_FILES['editgambaragri']['name'])) {			
				$this->m_tembakau->update_agribisnis_noimg($id,$jenis,$des);
			}else{
				$dataagri = $this->m_tembakau->get_agri_byId($id);
				unlink($targetpathagri.$dataagri[0]->gambar_agribisnis);
				$targetpathagribisnis = $targetpathagri.basename($_FILES['editgambaragri']['name']);
				move_uploaded_file($_FILES['editgambaragri']['tmp_name'],$targetpathagribisnis);
				$this->m_tembakau->update_agribisnis($id,$jenis,$des,$_FILES['editgambaragri']['name']);
			}		
			redirect(base_url('admin/tembakau'));
		}
		public function deleteAgribisnis($id){			
			$this->load->model("m_tembakau");
			$targetpathagri = "assets/agribisnis/";
			$dataagri = $this->m_tembakau->get_agri_byId($id);
			unlink($targetpathagri.$dataagri[0]->gambar_agribisnis);
			$this->m_tembakau->delete_agribisnis($id);
			redirect(base_url('admin/tembakau'));
		}
	}
 ?>