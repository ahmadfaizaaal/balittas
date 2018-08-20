<?php 
	class pencarian extends CI_Controller{

		public function index(){
			$dataHeader['judul'] = "Pencarian";
			
			$this->load->view('header', $dataHeader);			
			$this->load->view('HalamanPencarian');
			$this->load->view('footer');
		}

		public function cari(){
			$this->load->model("m_teknologi");						
			$cari = $this->input->post('keyword');		
			$datapencarian['pencarianTekno'] = $this->m_teknologi->pencarianTeknologi($cari);			

			
			$dataHeader['judul'] = "Pencarian";
			$this->load->view('header', $dataHeader);			
			$this->load->view('HalamanPencarian',$datapencarian);
			$this->load->view('footer');
		}

	}
 ?>