<?php

/*
 * Class 
 * @filename Lib_email 
 * @encoding UTF-8
 * @author Liquid Edge Solutions  * 
 * @copyright Copyright Liquid Edge Solutions. All rights reserved. * 
 * @programmer Ryno van Zyl * 
 * @date 30 Mar 2017 * 
 */

/**
 * Description of Lib_email
 *
 * @author Ryno
 */
class Lib_email_template extends Lib_core{
    
    //--------------------------------------------------------------------------------
  	// properties
  	//--------------------------------------------------------------------------------
    private $template = false;
    private $template_name = false;
    private $body = false;
    protected $template_dir = DIR_ASSETS."/templates/email/";
    //--------------------------------------------------------------------------------
  	// functions
  	//--------------------------------------------------------------------------------
    public function __construct($template_name = false) {
        $this->template_name = $template_name;
    }
	//--------------------------------------------------------------------------------
    public function set_template($template_name) {
		$this->template_name = $template_name;
		$this->template = "$this->template_dir/$this->template_name.html";
		if(file_exists($this->template)){
			$this->body = file_get_contents("$this->template_dir/$this->template_name.html");
		}else{
			show_error("The template could not be found.");
		}
    }
    //--------------------------------------------------------------------------------
    public function add_argument($field_name, $value) {
       $this->body = str_replace("%$field_name%", $value, $this->body);
    }
    //--------------------------------------------------------------------------------
    public function get_html() {
       return $this->body;
    }
    //--------------------------------------------------------------------------------
}
