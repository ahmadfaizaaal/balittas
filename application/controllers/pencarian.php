<?php 
	class pencarian extends CI_Controller{

		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();

            $this->load->library('pagination');
            $this->load->model('m_varietas');
            $this->load->model('M_leaflet');
			$this->load->model("m_teknologi");
			$this->load->model("m_agribisnis");									
		}

		public function index(){
			$cari = $this->input->get('keyword');
			$datapencarian['keyword'] = $cari;	
			$datapencarian['pencarianVarietas'] = $this->m_varietas->pencarianVarietas($cari);
			$datapencarian['pencarianWaktuTanam'] = $this->m_varietas->pencarianWaktuTanam($cari);
			$datapencarian['pencarianLeaflet'] = $this->M_leaflet->pencarianLeaflet($cari);
			$datapencarian['pencarianTekno'] = $this->m_teknologi->pencarianTeknologi($cari);
			$datapencarian['pencarianAgribisnis'] = $this->m_agribisnis->pencarianAgribisnis($cari);
			
			$dataHeader['judul'] = "Pencarian";
			$this->load->view('header', $dataHeader);			
			$this->load->view('HalamanPencarian',$datapencarian);
			$this->load->view('footer');
		}

	}
 ?>