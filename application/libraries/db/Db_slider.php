<?php
/**
 * Description of lib
 *
 * @author Ryno
 */
class Db_slider extends Lib_db{
    
    public function __construct() {
        $this->set_key("sli_id");
        $this->set_display("sli_header");
        $this->set_table("slider");
        
        $this->set_fields_arr([
            "sli_id"				=>	["name" => "id"			,"default" => "null"	,"type" => DB_INT],
            "sli_ref_file"			=>	["name" => "file"		,"default" => "null"    ,"type" => DB_REFERENCE, "reference" => "file"],
            "sli_ref_file_thumb"	=>	["name" => "file thumb"	,"default" => "null"    ,"type" => DB_REFERENCE, "reference" => "file"],
            "sli_is_active"			=>	["name" => "is active"	,"default" => "0"		,"type" => DB_TINYINT],
            "sli_header"			=>	["name" => "header"		,"default" => ""		,"type" => DB_VARCHAR],
            "sli_text"				=>	["name" => "body"		,"default" => "null"	,"type" => DB_TEXT],
        ]);
    }
	
	//----------------------------------------------------------------------------------------
    public $sli_is_active = [
        "" => "No",
        1 => "Yes",
    ];
    //----------------------------------------------------------------------------
}
