<?php /**
* 
*/
class Home extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('HalamanUtama');
	}

	public function detailVarietas()
	{
		$this->load->view('HalamanDetailVarietas');
	}

	public function teknologibudidaya() {
		$this->load->view('HalamanDetailTeknologi');
	}

	public function agribisnis() {
		$this->load->view('HalamanDetailAgribisnis');
	}
} ?>