<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    //--------------------------------------------------------------------------
	public function vdashboard() {
        $this->load_view('dashboard/vdashboard', "system");
    }
    //--------------------------------------------------------------------------
}
