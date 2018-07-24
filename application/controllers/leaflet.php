<?php 
	class leaflet extends CI_Controller
	{
		public function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->database();
            $this->load->model('M_leaflet');
		}

		public function index(){
			$data['dataLeaflet'] = $this->M_leaflet->selectLeafletAll();
			$this->load->view('HalamanDetailLeaflet', $data);
		}



	} 
?>