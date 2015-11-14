<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index() {
        $lang = "en";
        $dir = "english";
        if(isset($_GET['lang'])){
            if($_GET['lang'] == "vi"){
                $lang = "vi";
                $dir = "vietnamese";
            }
        }
        $data['lang'] = $lang;
        $this->lang->load($lang, $dir);
        $this->load->view('home/index', $data);
    }
}

/* End of file Home.php */

/* Location: ./application/controllers/Home.php */
