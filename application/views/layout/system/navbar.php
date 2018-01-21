<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $navbar = new Lib_navbar();
    
//    $list_items = [];
//    $list_items["-- Add New Service --"] = "cms/vadd_service_type";
//    $service_type_arr = Lib_db::load_db("service_type", "srv_is_active = 1", ["multiple" => true]);
//    if($service_type_arr && count($service_type_arr->obj_arr) > 0){
//        foreach ($service_type_arr->obj_arr as $service_type) {
//            $list_items[$service_type->srv_name] = "cms/vlist_service/$service_type->srv_id";
//        }
//    }
    
//    $navbar->add_navitem_dropdown("Services", $list_items, ["icon" => "fa-users"]);
//    $navbar->add_navitem_dropdown("Config", [
//        "Website Content" => "cms/vconfig",
//        "Service Categories" => "cms/vlist_service_type",
//    ], ["icon" => "fa-gear"]);
    $navbar->add_navitem("Home", "slider/vlist", ["icon" => "fa-home"]);
    $navbar->add_navitem("Services", "home/vhome", ["icon" => "fa-gear", "newtab" => true]);
    $navbar->add_navitem("Products", "home/vhome", ["icon" => "fa-list", "newtab" => true]);
    $navbar->add_navitem("About Us", "home/vhome", ["icon" => "fa-question-circle", "newtab" => true]);
    $navbar->add_navitem("Contact", "home/vhome", ["icon" => "fa-envelope", "newtab" => true]);
//    $navbar->add_navitem_dropdown("<i class='fa fa-user margin-right-5' aria-hidden='true'></i>", [
////        "My Profile" => "person/vprofile",
//        "Logout" => "index/xlogout"
//    ], ["align" => "right"]);
    $navbar->display();
    
?>