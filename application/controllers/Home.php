<?php 
	class Home extends CI_Controller
	{	
		public function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            // $this->load->database();
            $this->load->library('pagination');
            $this->load->model('M_leaflet');
            $this->load->model('m_varietas');
		}

		public function index()
		{
			// $data['varietas'] = $this->m_varietas->selectAllVarietas();
			$data['jumlahVarietas'] = $this->m_varietas->getJumlahVarietas();
			$data['subLeaflet'] = $this->M_leaflet->selectTop4Leaflet();

			$jumlah = $this->m_varietas->getJumlahVarietas();
			
			//set base_url untuk setiap link page
            $config['base_url'] = base_url()."Home/index/";

	        //hitung jumlah row
            $config['total_rows'] = $jumlah;
 
            //mengatur total data yang tampil per page
            $config['per_page'] = 9;
 
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
 
            //inisialisasi array
            // $data = array();
 
            //ambil data buku dari database
            $data['varietas'] = $this->m_varietas->selectAllVarietas($config['per_page'],$dari);
            // $data['varietas'] = $this->m_varietas->getVarietas($config['per_page'],$dari);
            
 
            //Membuat link
            $str_links = $this->pagination->create_links();
            $data['links'] = explode('&nbsp;',$str_links );

			$this->load->view('HalamanUtama', $data);
		}	
		

		public function agribisnis() {
			$this->load->view('HalamanDetailAgribisnis');
		}
	} 
?>