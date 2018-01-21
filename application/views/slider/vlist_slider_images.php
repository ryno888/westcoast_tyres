<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $list = new Lib_list();
    $list->sql_key = "sli_id";
    $list->sql_select = "sli_id, sli_ref_file, sli_ref_file_thumb, sli_is_active, sli_header";
    $list->sql_from = "slider";
    
    $list->add_field("Name", "sli_header");
    $list->add_field("Preview", "sli_id", ["function" => function($sli_id){
        $slider = Lib_db::load_db("slider", "sli_id = $sli_id");
        $sef_ref_file_thumb_tiny = Http_helper::build_url("index/xstream/fil_id/{$slider->get("sli_ref_file")}");
        $sef_ref_file_thumb_lg = Http_helper::build_url("index/xstream/fil_id/{$slider->get("sli_ref_file_thumb")}");
        return "
            <a href='$sef_ref_file_thumb_lg' class='fancy-box-image' data-fancybox='images' data-width='900' data-height='500'>
                <img class='fancy-box-thumb' src='$sef_ref_file_thumb_tiny' />
            </a>
        ";
    }]);
    
    $list->add_action_delete("cms/xdelete_service_file/sli_id/%sli_id%");
    $list->display();
?>
