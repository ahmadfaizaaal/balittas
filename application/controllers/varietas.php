<?php 	
	class varietas extends CI_Controller
	{
		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
            $this->load->library('pagination');
            $this->load->model('M_leaflet');
            $this->load->model('m_varietas');
		}

		public function jenistembakau($kategori) {
			$dataHeader['judul'] = "Jenis Tembakau";
 			// $data['jenisVarietas'] = array("Madura", "Virginia", "Temanggung", "Kasturi", "Paiton", "Maesan", "Ploso", "Demak", "Kendal", "Burley", "Bahan Cerutu", "Boyolali", "Kalituri", "Selopuro", "Mole", "Jamak", "Payakumbuh");
			$jenis = ""; $namaAtribut = "";

 			if ($kategori == "asalusul") {
 				$jenis = "Asal-usul";
 				$namaAtribut = "Asal";
 			} else if ($kategori == "kegunaan") {
 				$jenis = "Kegunaan";
 				$data['jenistembakau'] = $this->m_varietas->selectJenisTembakau();
 			} else if (substr($kategori, 0, 10) == "waktutanam") {
 				$jenis = "Waktu Tanam";
 				$data['waktutanam'] = $this->m_varietas->selectWaktuTanam();
 				if (strlen($kategori) == 10) {
 					$data['value'] = "";	
 				} else {
 					$data['value'] = substr($kategori, 13, (strlen($kategori)-1));
 				}
 			} else if ($kategori == "daerahpengembangan") {
 				$jenis = "Daerah Pengembangan";
 				$namaAtribut = "Daerah pengembangan";
 			} else if ($kategori == "daerahpenanaman") {
 				$jenis = "Daerah Penanaman";
 				$data['jenistembakau'] = $this->m_varietas->selectJenisTembakau();
 			}

 			if (!empty($namaAtribut)) {
				$jumlah = $this->m_varietas->getJumlahVarietasBy($namaAtribut);
	            $config['base_url'] = base_url()."varietas/jenistembakau/$kategori/";

				//hitung jumlah row
	            $config['total_rows'] = $jumlah;
	 
	            //mengatur total data yang tampil per page
	            $config['per_page'] = 16;
	 
	            //mengatur jumlah nomor page yang tampil
	            $config['num_links'] = $jumlah;
	 
	            //mengatur tag
	            $config['num_tag_open'] = '<li>';
	            $config['num_tag_close'] = '</li>';
	            $config['next_tag_open'] = "<li>";
	            $config['next_tagl_close'] = "</li>";
	            $config['prev_tag_open'] = "<li>";
	            $config['prev_tagl_close'] = "</li>";
	            $config['first_tag_open'] = "<li>";
	            $config['first_tagl_close'] = "</li>";
	            $config['last_tag_open'] = "<li>";
	            $config['last_tagl_close'] = "</li>";
	            $config['cur_tag_open'] = '&nbsp;<a class="current">';
	            $config['cur_tag_close'] = '</a>';
	            $config['next_link'] = '<i class="glyphicon glyphicon-chevron-right"></i>';
            	$config['prev_link'] = '<i class="glyphicon glyphicon-chevron-left"></i>';

	            //inisialisasi array 'config' dan set ke pagination library
	            $this->pagination->initialize($config);
	           
	            $dari = $this->uri->segment('4');

	 			$data['dataJenisTembakau'] = $this->m_varietas->selectVarietasByPagination($namaAtribut, $config['per_page'], $dari);
	 			
	            //Membuat link
	            $str_links = $this->pagination->create_links();
	            $data['links'] = explode('&nbsp;',$str_links);
 			}

	 		$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();
	 		$data['url'] = $kategori;
	 		$data['kategori'] = $jenis;

	 		 //counter pengunjung 
            date_default_timezone_set('Asia/Jakarta');
            $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Y-m-d");
            $bulanIni = date("m");
            $waktu   = date('H:i');
            $this->load->model("m_tembakau");
                        
            if(empty($this->session->userdata('pengunjung'))){
                  $this->m_tembakau->addUser($ip,$tanggal,$waktu);
                  $this->session->set_userdata('pengunjung','aktif');                  
            }
            $counter['pengunjungTotal'] = $this->m_tembakau->getTotalVisitor();
            $counter['pengunjungHariIni'] = $this->m_tembakau->getTotalToday($tanggal); 
            $counter['pengunjungBulanIni'] = $this->m_tembakau->getTotalByMonth($bulanIni); 

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanJenisTembakau', $data);
			$this->load->view('footer',$counter);
		}

		public function detailVarietas($nama){
			$dataHeader['judul'] = "Detil Varietas";
			$namaVarietas = explode('%23keyword%3D', $nama);
			$idVarietas = $this->m_varietas->selectIdByNamaVarietas(urldecode($namaVarietas[0]));

			if (count($namaVarietas) == 1) {
				$data['keyword'] = "";
			} else {
				$data['keyword'] = urldecode($namaVarietas[1]);
			}
			$data['varietas'] = $this->m_varietas->selectVarietasById($idVarietas);
			$data['detailVarietas'] = $this->m_varietas->selectDetailVarietas($idVarietas);
			$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();

			 //counter pengunjung 
            date_default_timezone_set('Asia/Jakarta');
            $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Y-m-d");
            $bulanIni = date("m");
            $waktu   = date('H:i');
            $this->load->model("m_tembakau");
                        
            if(empty($this->session->userdata('pengunjung'))){
                  $this->m_tembakau->addUser($ip,$tanggal,$waktu);
                  $this->session->set_userdata('pengunjung','aktif');                  
            }
            $counter['pengunjungTotal'] = $this->m_tembakau->getTotalVisitor();
            $counter['pengunjungHariIni'] = $this->m_tembakau->getTotalToday($tanggal); 
            $counter['pengunjungBulanIni'] = $this->m_tembakau->getTotalByMonth($bulanIni); 

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanDetailVarietas', $data);
			$this->load->view('footer',$counter);
		}
	}
 ?>