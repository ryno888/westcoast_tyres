<?php
/**
 * Description of lib
 *
 * @author Ryno
 */
class Lib_db{
    //put your code here
    private $table = false;
    private $key = false;
    private $display_field = false;
    private $fields_arr = false;
    
    public $id = false;
    public $obj = false;
    public $obj_arr = [];
    private $new = false;

    //--------------------------------------------------------------------------
    public function on_update(&$obj) {}
    public function on_update_complete() {}
    public function on_insert() {}
    public function on_insert_complete() {}
    public function on_delete() {}
    public function on_delete_complete() {}
    //--------------------------------------------------------------------------
    public function set_table($table) {
        $this->table = $table;
    }
    //--------------------------------------------------------------------------
    public function set_key($key) {
        $this->key = $key;
    }
    //--------------------------------------------------------------------------
    public function set_fields_arr($fields_arr = []) {
        $this->fields_arr = $fields_arr;
    }
    //--------------------------------------------------------------------------
    public function get_fields_arr() {
        return $this->fields_arr;
    }
    //--------------------------------------------------------------------------
    public function get_table() {
        return $this->table;
    }
    //--------------------------------------------------------------------------
    public function get_key() {
        return $this->key;
    }
    //--------------------------------------------------------------------------
    public function get_field_default($field_name) {
        return $this->fields_arr[$field_name]["default"];
    }
    //--------------------------------------------------------------------------
    public function get_display() {
        return $this->display_field;
    }
    //--------------------------------------------------------------------------
    public function get_field_reference_data($field_name) {
        
        $table = isset($this->fields_arr[$field_name]["reference"]) ? $this->fields_arr[$field_name]["reference"] : false;
        if($table){
            $class = Lib_db::load_db_default($table);
            return [
                "table" => $table, 
                "key" => $class->key,
                "display_field" => $class->display_field,
            ];
        }
        
    }
    //--------------------------------------------------------------------------
    public function get_list($field_name) {
        
        $reference_table = $this->get_field_reference_data($field_name);
        return Lib_database::selectlist("
            SELECT {$reference_table["key"]}, {$reference_table["display_field"]} 
            FROM  {$reference_table["table"]}", 
            $reference_table["key"], $reference_table["display_field"]
        );
    }
    //--------------------------------------------------------------------------
    public function get_field_display($field_name) {
        return $this->fields_arr[$field_name]["name"];
    }
    //--------------------------------------------------------------------------
    public function get_field_value($field_name) {
        return $this->obj->{$field_name};
    }
    //--------------------------------------------------------------------------
    public function get($field_name, $function = false, $options = []) {
        $return = false;
        if($this->is_empty($field_name)){ return false; }
        if($function){
            return call_user_func($function, $this->obj, $field_name);
        }else{
            switch ($this->get_field_type($field_name)) {
                case DB_DATETIME:
                    $options_arr = array_merge([
                        "format" => CI_DATETIME
                    ], $options);
                    $return = Lib_date::strtodatetime($this->obj->{$field_name}, $options_arr["format"]);
                    break;
                case DB_DATE:
                    $options_arr = array_merge([
                        "format" => CI_DATE
                    ], $options);
                    $return = Lib_date::strtodatetime($this->obj->{$field_name}, $options_arr["format"]);
                    break;
                default: $return = $this->obj->{$field_name}; break;
            }
        }
        
        
        
        return $return;
    }
    //--------------------------------------------------------------------------
    public function get_field_type($field_name) {
        return $this->fields_arr[$field_name]["type"];
    }
    //--------------------------------------------------------------------------
    public function get_fromdb($sql_where, $options = []) {
        $options_arr = array_merge([
            "multiple" => false,
            "customsql" => false,
            "return_default" => false,
        ], $options);
        
        $this->set_new();
        $id_select = $options_arr["multiple"] ? "$this->key AS id, " : "";
        $where = $sql_where !== false ? "WHERE $sql_where" : "";
        $customsql = $options_arr["customsql"] ? "$this->table $sql_where" : "$this->table  $where";
        
        if(is_numeric($sql_where)){
            $obj = Lib_database::query("SELECT * FROM $this->table WHERE $this->key = $sql_where", 1);
        }else if($sql_where){
            $obj = Lib_database::query("SELECT $id_select $this->table.* FROM $customsql", $options_arr["multiple"] ? false : 1);
        }else{
            $obj = Lib_database::query("SELECT $id_select $this->table.* FROM $customsql", $options_arr["multiple"] ? false : 1);
        }
        
        if($options_arr["multiple"] && $obj){
            $this->obj_arr = $obj;
            return $this->obj_arr;
        }else if($obj){
            $this->obj = $obj;
            $this->id = $this->obj->{$this->key};
            return $this->obj;
        }else{
            return $options_arr["multiple"] ? [] : $options_arr["return_default"];
        }
    }
    //--------------------------------------------------------------------------
    private function set_new() {
        $this->new = new stdClass();
        
        foreach ($this->fields_arr as $field => $field_data_arr) {
            $this->new->{$field} = $this->get_field_default($field);
        }
        
        return $this->new;
    }
    //--------------------------------------------------------------------------
    public function get_fromdefault() {
        $this->obj = clone($this->set_new());
        return $this->obj;
    }
    //--------------------------------------------------------------------------
    public function insert() {
        $database = new Lib_database();
        if(property_exists($this->obj, $this->key)){
            unset($this->obj->{$this->key});
        }
        $this->id = $this->obj->{$this->key} = $database->insert($this->table, $this->obj);
    }
    //--------------------------------------------------------------------------
    public function update() {
        $database = new Lib_database();
        $this->on_update($this->obj);
        $database->update($this->table, $this->key, $this->clean_obj());
    }
    //--------------------------------------------------------------------------
    public function delete() {
        $database = new Lib_database();
        $this->on_delete();
        $database->delete($this->table, $this->key, $this->get($this->key));
        $this->on_delete_complete();
    }
    //--------------------------------------------------------------------------
    public function clean_obj() {
        $clean_object = clone($this->obj);
        foreach ($clean_object as $key => $value) {
            if($value === $this->get_field_default($key)){
                unset($clean_object->{$key});
            }else{
                switch ($this->get_field_type($key)) {
                    case DB_DATETIME: $clean_object->{$key} = Lib_date::strtodatetime($clean_object->{$key}); break;
                    case DB_DATE: $clean_object->{$key} = Lib_date::strtodatetime($clean_object->{$key}, CI_DATE); break;
                }
            }
        }
        return $clean_object;
    }
    //--------------------------------------------------------------------------
    public function is_empty($field) {
        $default = $this->get_field_default($field);
        return $this->obj->{$field} !== $default ? false : true;
    }
    //--------------------------------------------------------------------------
    //static
    //--------------------------------------------------------------------------
    public static function load_db($table, $sql, $options = []){
        $class = "db_{$table}";
        $ci = & get_instance();
        $ci->load->library("Lib_db");
        $ci->load->library("db/$class");
        
        $db = new $class;
        $obj = $db->get_fromdb($sql, $options);
        
        return $obj ? $db : false;
    }
    //--------------------------------------------------------------------------
    public static function load_db_default($table){
        $class = "db_{$table}";
        $ci = & get_instance();
        $ci->load->library("Lib_db");
        $ci->load->library("db/$class");
        
        $db = new $class;
        $db->get_fromdefault();
        
        return $db;
    }
    //--------------------------------------------------------------------------
    public static function get_table_key($table){
        $class = Lib_db::load_db_default($table);
        
        return $class->get_key();
    }
    //--------------------------------------------------------------------------
    public static function get_enum_arr($table, $field, $exclude = []){
        $class = Lib_db::load_db_default($table);
        $return = $class->{$field};
        foreach ($exclude as $value) {
            if(isset($return[$value])){
                unset($return[$value]);
            }
        }
        return $return;
    }
    //--------------------------------------------------------------------------
    public static function get_enum_value($table, $field, $value = false){
        $class = Lib_db::load_db_default($table);
        return isset($class->{$field}[$value]) ? $class->{$field}[$value] : false;
    }
    //--------------------------------------------------------------------------
    function set_display($display_field) {
        $this->display_field = $display_field;
    }
    //--------------------------------------------------------------------------
}
