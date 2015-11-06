<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function gobusstop($busline = "") {
		$this->load->helper('text');

		$sql = "SELECT goRouteThroughStops FROM busline WHERE code LIKE '$busline'";
		$result = $this->db->query($sql)->result();
		$result = $result[0];
		// sqql
		$busStop = explode(" ", $result->goRouteThroughStops);
		echo '<ul class="list-group">';
		for ($i = 0; $i < count($busStop) - 1; $i++) {

			$sql = "SELECT * FROM busstop WHERE code LIKE '" . $busStop[$i] . "'";
			$result = $this->db->query($sql)->result();
			if ($result != NULL) {
				$result = $result[0];
				// sql
				$latlng = explode("|", $result->location);
				if ($i == 10) {
					echo '<li total = "' . (count($busStop) - 1) . '" style="display:none;" class="latlng-center" lng ="' . $latlng[0] . '" lat="' . $latlng[1] . '"></li>';
				}

				echo '<li id="marker-' . $i . '" class="list-group-item" title="' . $result->address_name . '" lng ="' . $latlng[0] . '" lat="' . $latlng[1] . '">' . character_limiter($result->address_name, 25);
				echo '<div class="dropdown pull-right">
  <i class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="fa fa-fw fa-cog fa-2x" style="color:red; margin-top: -5px;"></i></span>
  </i>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li class="edit" code = "' . $result->code . '"><a href="#"><i class="fa fa-fw fa fa-wrench"></i>Sửa</a></li>
    <li class="del" code = "' . $result->code . '"><a href="#"><i class="fa fa-fw fa fa-trash"></i>Xóa</a></li>
  </ul>
</div>';
				echo "</li>";
			}
		}
		echo '</ul>';
	}

	public function returnbusstop($busline = "") {
		$this->load->helper('text');
		// sql
		$sql = "SELECT returnRouteThroughStops FROM busline WHERE code LIKE '$busline'";
		$result = $this->db->query($sql)->result();
		$result = $result[0];

		$busStop = explode(" ", $result->returnRouteThroughStops);
		echo '<ul class="list-group">';
		for ($i = 0; $i < count($busStop) - 1; $i++) {
			// sql
			$sql = "SELECT * FROM busstop WHERE code LIKE '" . $busStop[$i] . "'";
			$result = $this->db->query($sql)->result();
			if ($result != NULL) {
				$result = $result[0];
				// sql
				$latlng = explode("|", $result->location);
				if ($i == 10) {
					echo '<li total = "' . (count($busStop) - 1) . '" style="display:none;" class="latlng-center" lng ="' . $latlng[0] . '" lat="' . $latlng[1] . '"></li>';
				}

				echo '<li id="marker-' . $i . '" class="list-group-item" title="' . $result->address_name . '" lng ="' . $latlng[0] . '" lat="' . $latlng[1] . '">' . character_limiter($result->address_name, 25);
				echo '<div class="dropdown pull-right">
  <i class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <i class="fa fa-fw fa-cog fa-2x" style="color:red; margin-top: -5px;"></i></span>
  </i>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li class="edit" code = "' . $result->code . '"><a href="#"><i class="fa fa-fw fa fa-wrench"></i>Sửa</a></li>
    <li class="del" code = "' . $result->code . '"><a href="#"><i class="fa fa-fw fa fa-trash"></i>Xóa</a></li>
  </ul>
</div>';
				echo "</li>";

			}

		}
		echo '</ul>';
	}

	public function getbusstop() {
		$code = $this->input->post("code");
		$sql = "SELECT * FROM busstop WHERE code LIKE '$code'";
		$result = $this->db->query($sql)->result();
		$data['data'] = $result[0];
		$this->load->view('bus/getbusstop', $data);
	}

	public function editbusstop() {
		# code...
		$old_code = $this->input->post("old_code");
		$edit_code = $this->input->post("edit_code");
		$edit_name = $this->input->post("edit_name");
		$edit_longlat = $this->input->post("edit_longlat");
		$edit_passby = $this->input->post("edit_passby");
		$sql = "UPDATE `busstop` SET `busPassBy`='$edit_passby',`address_name`='$edit_name',`code`='$edit_code',`location`='$edit_longlat' WHERE code LIKE '$old_code'";
		$this->db->query($sql);
		echo "success";
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */