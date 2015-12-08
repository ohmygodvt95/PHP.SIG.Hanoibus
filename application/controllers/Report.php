<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
		$sql = "SELECT * FROM userreport WHERE status = 0 AND type = 1 ORDER BY _id DESC";
		$data['data_new'] = $this->db->query($sql)->result();
		$sql = "SELECT * FROM userreport WHERE status = 1 AND type = 1 ORDER BY _id DESC";
		$data['data_seen'] = $this->db->query($sql)->result();
		$sql = "SELECT * FROM userreport WHERE status = 2 AND type = 1 ORDER BY _id DESC";
		$data['data_done'] = $this->db->query($sql)->result();
		$this->load->view('report/index', $data);
	}
	public function xuly($id=0)
	{
		if($id == 0){
			echo 'ERROR';
		}else{

			$sql = "SELECT * FROM userreport WHERE _id = $id AND type = 1";
			$result= $this->db->query($sql)->result();
			$data['data'] = $result[0];
			$data['stringdata'] = json_decode($result[0]->stringdata, FALSE);
			$sql = "UPDATE `userreport` SET `status` = '1' WHERE `_id` = $id AND type = 1";
			$result= $this->db->query($sql);
			$this->load->view('report/fix', $data);
		}
	}

	public function fix()
	{
		$code = $this->input->post('code');
		$key = $this->input->post('key');
		$val = $this->input->post('val');
		$sql = "UPDATE `busline` SET $key = '$val' WHERE `_id` = $code;";
		$result = $this->db->query($sql);
		//echo $sql;
		$result = $this->db->query($sql);
		echo "TRUE";
	}
	public function fixed()
	{
		$code = $this->input->post('code');
		$sql = "UPDATE `userreport` SET `status` = '2' WHERE `_id` = ".$code;
		$result= $this->db->query($sql);
		echo "TRUE";
	}


}

/* End of file Report.php */
/* Location: ./application/controllers/Report.php */