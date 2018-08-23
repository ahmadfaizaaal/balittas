<?php 	
	class teknologibudidaya extends CI_Controller{

		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
            $this->load->library('pagination');
            $this->load->model('M_leaflet');
            $this->load->model('m_teknologi');
		}

		public function index($jenis) {
			$dataHeader['judul'] = "Teknologi Budidaya Tembakau";
			$jenisTeknologi = explode('%23keyword%3D', $jenis);
			$idTeknologi = $this->m_teknologi->selectIdTeknologiByJenis(urldecode($jenisTeknologi[0]));
			
			if (count($jenisTeknologi) == 1) {
				$data['keyword'] = "";
			} else {
				$data['keyword'] = urldecode($jenisTeknologi[1]);
			}
			$data['teknologi'] = $this->m_teknologi->selectTeknologiById($idTeknologi);
			$data['listFileTeknologi'] = $this->m_teknologi->selectFileByIdTeknologi($idTeknologi);
			$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanDetailTeknologi', $data);
			$this->load->view('footer');
		}

	}
 ?>