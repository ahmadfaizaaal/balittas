<?php 
	class leaflet extends CI_Controller
	{
		public function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->database();
            $this->load->library('pagination');
            $this->load->model('M_leaflet');
            $this->load->model('m_varietas');
		}

		public function index(){
			$dataHeader['judul'] = "Detail Leaflet";
			$jumlah = $this->M_leaflet->getJumlahLeaflet();
			
			//set base_url untuk setiap link page
            $config['base_url'] = base_url()."leaflet/index/";

	        //hitung jumlah row
            $config['total_rows'] = $jumlah;
 
            //mengatur total data yang tampil per page
            $config['per_page'] = 12;
 
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
            $config['next_link'] = '>>';
            $config['prev_link'] = '<<';

            //inisialisasi array 'config' dan set ke pagination library
            $this->pagination->initialize($config);
           
            $dari = $this->uri->segment('3');
 
            //ambil data buku dari database
            $data['dataLeaflet'] = $this->M_leaflet->selectLeafletPerPage($config['per_page'],$dari);
 
            //Membuat link
            $str_links = $this->pagination->create_links();
            $data['links'] = explode('&nbsp;',$str_links );


			// $data['dataLeaflet'] = $this->M_leaflet->selectLeafletAll();
			$data['varietas'] = $this->m_varietas->selectVarietasTerbaru();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanDetailLeaflet', $data);
			$this->load->view('footer');
		}



	} 
?>