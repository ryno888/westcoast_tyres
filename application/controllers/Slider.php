<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    //--------------------------------------------------------------------------
    public function index() {
		$data = false;
        $this->load_view('home/vhome', "frontend", $data);
    }
    //--------------------------------------------------------------------------
    public function vadd() {
        $data = [];
        $data["slider"] = Lib_db::load_db_default("slider");
        $this->load_view('slider/vadd', "system", $data);
    }
    //--------------------------------------------------------------------------
    public function vlist() {
        $data = [];
        $this->load_view('slider/vlist', "system", $data);
    }
	//--------------------------------------------------------------------------
    public function xadd() {
		$files_arr = request_files("file_dest");
		$slider = $this->request_obj("slider", true);
        $this->form_validation->set_rule_db($slider, 'sli_header');
        $this->form_validation->set_rule_db($slider, 'sli_text');
		if(count($files_arr) == 0){
			$this->form_validation->set_rules("file", 'File', "required");
		}
        if($this->form_validation->run() == false){
            return Http_helper::error(1, validation_errors());
        }
		
		if($files_arr){
            $this->load->helper("File_function");
            $this->load->helper("Image_compression");
            foreach ($files_arr as $path) {
                if(!is_dir($path)){
					$file_dir = dirname($path);
                    File_function_helper::mkdir("$file_dir/complete/");
                    
                    // Resize the image to specific width and height
                    $compressor = new Image_compression_helper($path);
//                    $compressor->cutFromCenter(1920, 1080);
                    $compressor->upload_and_compress("$file_dir/complete/".basename($path), [
						"crop" => "crop_to_max_width",
						"width" => 1920,
						"height" => 1080,
//						"width" => 1920,
//						"height" => 1080,
					]);
//                    $compressor->cutFromCenter(1920, 1080);
//                    $compressor->save("$file_dir/complete/".basename($path));
                    
                    $compressor_tiny = new Image_compression_helper($path);
                    $compressor_tiny->square(50, 50);
                    $compressor_tiny->save("$file_dir/complete/thumbnail_".basename($path));
                    
                    $db_file = Lib_db::load_db_default("file");
                    $db_file->save_image("$file_dir/complete/".basename($path));
                    
                    $db_file_thumb = Lib_db::load_db_default("file");
                    $db_file_thumb->save_image("$file_dir/complete/thumbnail_".basename($path));
					
					$slider->obj->sli_ref_file = $db_file->id;
					$slider->obj->sli_ref_file_thumb = $db_file_thumb->id;
                    
                }
            }
            File_function_helper::delete_directory($file_dir);
        }
		
		$slider->insert();
    }
	//--------------------------------------------------------------------------
    public function xdelete_file() {
        $this->load->helper("File_function");
        $dest = urldecode(request("dest"));
        $file = request("file");
        
        File_function_helper::delete_file("$dest/$file");
    }
    //--------------------------------------------------------------------------
}
