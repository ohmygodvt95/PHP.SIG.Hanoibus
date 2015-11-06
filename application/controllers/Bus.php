<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

	public function index() {
		$sql = "SELECT * FROM busline";
		$data['data'] = $this->db->query($sql)->result();
		$this->load->view('bus/index', $data);
	}
	public function report()
	{
		$this->load->view('bus/report');
	}

}

/* End of file Bus.php */
/* Location: ./application/controllers/Bus.php */