<?php 	
	class agribisnis extends CI_Controller{

		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
            $this->load->library('pagination');
            $this->load->model('M_leaflet');
            $this->load->model('m_agribisnis');
		}

		public function index() {
			$dataHeader['judul'] = "Agribisnis Tembakau";
			$data['agribisnis'] = $this->m_agribisnis->selectAgribisnis();
			$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanAgribisnis', $data);
			$this->load->view('footer');
		}

		public function jenis($jenis) {
			$dataHeader['judul'] = "Detil Agribisnis";
			$idTeknologi = $this->m_agribisnis->selectIdAgribisnisByJenis(urldecode($jenis));
			
			$data['agribisnis'] = $this->m_agribisnis->selectAgribisnisById($idTeknologi);
			$data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanDetailAgribisnis', $data);
			$this->load->view('footer');
		}

	}
 ?>