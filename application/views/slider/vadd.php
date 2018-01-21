<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $html = new Lib_html();
    $this->load->library("addons/Lib_fancy_box");
    $fancy_box = new Lib_fancy_box();
    
    $html->container_fluid = true;
    $html->header("Home Details", 3);
    $html->form("slider/xadd");
        $html->add_menu_submitbutton("Save Changes");
		$html->add_column("half");
			$html->fieldset_open("General Details");
				$html->dbinput($slider, "sli_header", ["required" => true]);
				$html->dbinput($slider, "sli_text", ["required" => true]);
				$html->dbinput($slider, "sli_is_active");
			$html->fieldset_close();
		$html->end_column();
		$html->add_column("half");
			$html->fieldset_open("Slider");
				$html->ifile_dropzone("Upload Image", "file", "assets/files/upload/slider/", [
					"url_delete" => "slider/xdelete_file",
					"max_files" => 1,
					"required" => true,
				]);
				$html->value(false, $fancy_box->get_output());
			$html->fieldset_close();
		$html->end_column();
    $html->end_form();
    $html->display();
    
?>
                

