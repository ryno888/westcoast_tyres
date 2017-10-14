<?php

/*
 * Class 
 * @filename lib 
 * @encoding UTF-8
 * @author Liquid Edge Solutions  * 
 * @copyright Copyright Liquid Edge Solutions. All rights reserved. * 
 * @programmer Ryno van Zyl * 
 * @date 14 Feb 2017 * 
 */

/**
 * Description of lib
 *
 * @author Ryno
 */
class Lib_navbar extends Lib_core{
    private $html = "";
    private $li_right_arr = [];
    private $li_left_arr = [];
    private $search = false;
    private $heading = false;
    private $heading_link = false;
    //--------------------------------------------------------------------------
    public function __construct($heading = false, $heading_link = false) {
        $this->heading = $heading ? $heading : CI_NAME;
        $this->heading_link = $heading_link ? $heading_link : CI_BASE_URL."index.php";
    }
    //--------------------------------------------------------------------------
    public function format_href($href = "#") {
        if(strpos($href, "index.php/") === false){
            $href = "index.php/$href";
        }
        return $href !== false ? "href='".Http_helper::build_url($href)."'" : false;
    }
    //--------------------------------------------------------------------------
    public function add_navitem($label, $href = "#", $options = []) {
        $options_arr = array_merge([
            "align" => "left",
            "icon" => false,
            "newtab" => false,
        ], $options);
        
        $attributes = $this->format_options($options);
        $formatted_href = $this->format_href($href);
        $icon = $options_arr["icon"] ? "<i class='fa {$options_arr["icon"]}' aria-hidden='true'></i> " : "";
        $newtab = $options_arr["newtab"] ? "target='_blank'" : "";
        
        $this->add_li("<li><a $newtab class='{$attributes['css']}' $formatted_href>{$icon}{$label}</a></li>", $options_arr['align']);
    }
    //--------------------------------------------------------------------------
    public function add_navitem_dropdown($label, $item_arr = [], $options = []) {
        $options_arr = array_merge([
            "align" => "left",
            "show_caret" => true,
            "icon" => true,
        ], $options);
        
        $li_item_html = "";
        foreach ($item_arr as $inner_label => $href) {
            $formatted_href = $this->format_href($href);
            $li_item_html .= "<li><a $formatted_href>$inner_label</a></li>";
        }
         $icon = $options_arr["icon"] ? "<i class='fa {$options_arr["icon"]}' aria-hidden='true'></i> " : "";
        $caret = $options_arr["show_caret"] ? "<span class='caret'></span>" : "";
        $li = "
            <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false' href='#'>{$icon}{$label}{$caret}</a>
                <ul class='dropdown-menu' role='menu'>
                    $li_item_html
                </ul>
            </li>
        ";
        
        $this->add_li($li, $options_arr['align']);
    }
    //--------------------------------------------------------------------------
    public function add_search($action, $options = []) {
        $options_arr = array_merge([
            "btn_label" => "Submit",
            "id" => "__search",
            "placeholder" => "Search",
            "align" => "navbar-left",
        ], $options);
        
        $this->search = "
            <form class='navbar-form {$options_arr["align"]}' role='search' action='$action' method='POST'>
                <div class='form-group'>
                    <input type='text' id='{$options_arr["id"]}' name='{$options_arr["id"]}' class='form-control' placeholder='{$options_arr["placeholder"]}'>
                </div>
                <button type='submit' class='btn btn-default'>{$options_arr["btn_label"]}</button>
            </form>
        ";
    }
    //--------------------------------------------------------------------------
    public function add_navitem_form($label, $form_html, $options = []) {
        $options_arr = array_merge([
            "align" => "left"
        ], $options);
        
        $html = "
             <li class='dropdown cursor-pointer'>
                <a class='dropdown-toggle' data-toggle='dropdown'>$label <b class='caret'></b></a>
                <ul class='dropdown-menu' style='padding: 15px; min-width: 250px;'>
                    <li>
                        <div class='row'>
                            <div class='col-md-12'>
                                $form_html
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        ";
        
        $this->add_li($html, $options_arr['align']);
    }
    //--------------------------------------------------------------------------
    public function add_li($html, $align) {
        if($align == "left"){
            $this->li_left_arr[] = $html;
        }else if($align == "right"){
            $this->li_right_arr[] = $html;
        }
    }
    //--------------------------------------------------------------------------
    public function build() {
        $html = "";
        if(count($this->li_left_arr) > 0){
            $left_li_html = implode("", $this->li_left_arr);
            $html .= "<ul class='nav navbar-nav'>$left_li_html</ul>";
        }
        
        if($this->search){ $html .= $this->search; }
        
        if(count($this->li_right_arr) > 0){
            $right_li_html = implode("", $this->li_right_arr);
            $html .= "<ul class='nav navbar-nav navbar-right'>$right_li_html</ul>";
        }
        
        $this->html = $html;
    }
    //--------------------------------------------------------------------------
    public function display() {
        $this->build();
        
        echo "
            <nav class='navbar navbar-inverse'>
                <div class='col-md-12'>
                    <div class='container-fluid'>
                        <div class='navbar-header'>
                            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navcol-1'>
                                <span class='sr-only'>Toggle navigation</span>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                                <span class='icon-bar'></span>
                            </button><a class='navbar-brand navbar-link' href='$this->heading_link'>$this->heading</a></div>
                        <div class='collapse navbar-collapse' id='navcol-1'>
                            $this->html
                        </div>
                    </div>
                </div>
            </nav>
        ";
    }
    //--------------------------------------------------------------------------
}
