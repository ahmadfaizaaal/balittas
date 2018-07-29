<?php 
	class pencarian extends CI_Controller{

		public function index(){
			$dataHeader['judul'] = "Pencarian";
			
			$this->load->view('header', $dataHeader);			
			$this->load->view('HalamanPencarian');
			$this->load->view('footer');
		}

	}
 ?>