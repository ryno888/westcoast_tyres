<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    //--------------------------------------------------------------------------
	public function page_not_found() {
        $this->load_view('errors/cli/error_404', "web");
    }
    //--------------------------------------------------------------------------
    public function xhome() {
        $active_id = Lib_user::get_active_id();
        if(!$active_id){
            Http_helper::redirect("index.php/home/vhome");
        }
        Http_helper::redirect("index.php/dashboard/vdashboard");
    }
    //--------------------------------------------------------------------------
    public function vhome() {
        $this->load_view('index/vhome', "system");
    }
    //--------------------------------------------------------------------------
    public function vlogin() {
        $active_id = Lib_user::get_active_id();
        if($active_id){ Http_helper::go_home(); }
        $this->set_meta_title("Login");
        $this->load_view('index/vlogin', "web");
    }
    //--------------------------------------------------------------------------
    public function xlogin() {
        //add the header here
        $per_usernamme = request('per_usernamme');
        $per_password = request('per_password');
        $result = Lib_user::login($per_usernamme, $per_password);
        echo $result ? Http_helper::json(["code"=> 1]) : Http_helper::json(["code"=> 2, "title" => "Username & Password incorrect", "message" => "The username and password combination you have used is incorrect. Please try again."]);
    }
    //--------------------------------------------------------------------------
    public function xregister() {
        //add the header here
        $email = $this->input->get_post('email');
        $firstname = $this->input->get_post('firstname');
        $lastname = $this->input->get_post('lastname');
        $passwd = $this->input->get_post('passwd');
        $icode = $this->input->get_post('icode');
        Http_helper::json(["code"=> 2, "title" => "Username & Password incorrect", "message" => "The username and password combination you have used is incorrect. Please try again."]);
    }
    //--------------------------------------------------------------------------
    public function xlogin_fb() {
        $username = $this->input->get_post('username');
        $password = $this->input->get_post('password');
        $result = com_user::login($username, $password);
        echo $result ? "true" : "false";
    }
    //--------------------------------------------------------------------------
    public function xcontact() {
        console($_REQUEST);
    }
    //--------------------------------------------------------------------------
    public function xlogout() {
        $session = Lib_session::get_session();
        $session->sess_destroy();
        Http_helper::go_home();
    }
    //--------------------------------------------------------------------------
    public function xstream() {
        $fil_id = request("fil_id");
        $file = Lib_db::load_db("file", "fil_id = $fil_id");
        $file->stream();
    }
    //--------------------------------------------------------------------------
    public function xinstall_admin() {
        $person = Lib_db::load_db("person", "per_email = 'ryno888@gmail.com'");
		if(!$person){
			$person = Lib_db::load_db_default("person");
		}
		$person->obj->per_firstname = "Ryno";
		$person->obj->per_lastname = "Van Zyl";
		$person->obj->per_username = "admin";
		$person->obj->per_password = "admin1";
		$person->obj->per_email = "ryno888@gmail.com";
		$person->save();
		
    }
	//--------------------------------------------------------------------------
    public function xupload_file() {
        $this->load->helper("File_function");
        $dest = urldecode(request("dest"));
        File_function_helper::mkdir($dest);
        
        echo "<pre>";
        print_r($_FILES);
        print_r($_POST);
        echo "</pre>";

        
        @mkdir(DIR_FILES."upload/");
        if(!move_uploaded_file($_FILES['file']['tmp_name'], "$dest/{$_FILES['file']['name']}")){
            echo "error";
        }
        
        echo "success";
    }
    //--------------------------------------------------------------------------
}
