<?php 
	class Home extends CI_Controller
	{	
		public function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->database();
            $this->load->model('M_leaflet');
		}

		public function index()
		{
			$data['subLeaflet'] = $this->M_leaflet->selectTop4Leaflet();
			$this->load->view('HalamanUtama', $data);
		}	
		

		public function agribisnis() {
			$this->load->view('HalamanDetailAgribisnis');
		}
	} 
?>