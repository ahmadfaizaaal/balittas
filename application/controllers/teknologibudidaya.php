<?php 	
	class teknologibudidaya extends CI_Controller{

		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
            $this->load->library('pagination');
            $this->load->model('M_leaflet');
            $this->load->model('m_varietas');
            $this->load->model('m_teknologi');
		}

		public function index($jenis) {
			$dataHeader['judul'] = "Teknologi Budidaya Tembakau";
			$idTeknologi = $this->m_teknologi->selectIdTeknologiByJenis(urldecode($jenis));
			
			$data['teknologi'] = $this->m_teknologi->selectTeknologiById($idTeknologi);
			$data['listFileTeknologi'] = $this->m_teknologi->selectFileByIdTeknologi($idTeknologi);
			$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanDetailTeknologi', $data);
			$this->load->view('footer');
		}
				
		public function penangkaranBenih(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function pesemaian(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function pemupukan(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function bebasChlor(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function pengendalianPenyakit(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function pengendalianHama(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function panen(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function kesesuaian(){
			$this->load->view('HalamanDetailTeknologi');
		}

		public function budidaya(){
			$this->load->view('HalamanDetailTeknologi');
		}

	}
 ?>