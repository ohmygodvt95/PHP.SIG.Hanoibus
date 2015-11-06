<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
		$sql = "SELECT * FROM userreport  ORDER BY _id DESC LIMIT 0, 10";
		$data['data'] = $this->db->query($sql)->result();
		$this->load->view('report/index', $data);
	}
	public function xuly($id=0)
	{
		if($id == 0){
			echo 'ERROR';
		}else{
			$sql = "SELECT * FROM userreport WHERE _id = ".$id;
			$result= $this->db->query($sql)->result();
			$data = json_decode($result[0]->stringdata, FALSE);
			foreach ($data->busLine as $key) {
				
			}
		}
	}


}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */