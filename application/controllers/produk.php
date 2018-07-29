<?php 
	class produk extends CI_Controller{
		
		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->database();
			$this->load->model('m_produk');
		}

		public function benih(){
			$dataHeader['judul'] = "Produk";
			$data['kategori'] = "Benih";
			$data['dataBenih'] = $this->m_produk->selectBenihAll();

			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanProduk1', $data);
			$this->load->view('footer');
		}

		public function produk2(){
			$this->load->view('HalamanProduk2');
		}
	}
 ?>