<?php 
	class produk extends CI_Controller{
		
		function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->database();
            $this->load->library('pagination');
			$this->load->model('m_produk');
			$this->load->model('M_leaflet');
		}

		public function benih(){
			$dataHeader['judul'] = "Produk";
			$data['kategori'] = "Stok Benih";
			$data['url'] = "benih";

			$jumlah = $this->m_produk->getJumlahBenih();
			
			//set base_url untuk setiap link page
            $config['base_url'] = base_url()."produk/benih/";

	        //hitung jumlah row
            $config['total_rows'] = $jumlah;
 
            //mengatur total data yang tampil per page
            $config['per_page'] = 10;
 
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
			$data['dataBenih'] = $this->m_produk->selectBenihAll($config['per_page'],$dari);
            $data['subLeaflet'] = $this->M_leaflet->selectLeafletTerbaru();
			$data['dataDistribusiBenih'] = $this->m_produk->selectDistribusiBenih();
 
            //Membuat link
            $str_links = $this->pagination->create_links();
            $data['links'] = explode('&nbsp;',$str_links );

            // $tahun = "2009"; $bulan = "_%_%";
            // $tes = $tahun."-".$bulan."-_%_%";
			$this->load->view('header', $dataHeader);
			$this->load->view('HalamanProduk1', $data);
			$this->load->view('footer');
		}

		public function filterDistribusi() {
			$tahun_bulan = $this->input->post('tahun_bulan');
			// echo $tahun_bulan;
			$data['dataDistribusiFiltered'] = $this->m_produk->selectDistribusiFiltered(substr($tahun_bulan, 0, 4) , substr($tahun_bulan, 5, 2));
			$this->load->view('FilterTable', $data);
		}

		public function produk2(){
			$this->load->view('HalamanProduk2');
		}
	}
 ?>