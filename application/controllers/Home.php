<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    //--------------------------------------------------------------------------
    public function index() {
		$data = false;
        $this->load_view('home/vhome', "frontend", $data);
    }
    //--------------------------------------------------------------------------
    public function vhome() {
        $data = false;
        $this->load_view('home/vhome', "frontend", $data);
    }
    //--------------------------------------------------------------------------
    public function xget_accommodation_detail() {
       
    }
    //--------------------------------------------------------------------------
}
