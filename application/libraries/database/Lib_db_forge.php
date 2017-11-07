<?php
/**
 * Description of lib
 *
 * @author Ryno
 */
class Lib_db_forge extends Lib_core{
    //put your code here
    private $table = false;
    private $key = false;
    private $fields_arr = false;
    private $db_obj = false;
    private $dbforge = false;
    private $post_queries = [];
    
    //--------------------------------------------------------------------------
    public function __construct($options = []) {
        $options_arr = array_merge([
            "table" => false
        ], $options);
        
        parent::__construct();
        $this->table = $options_arr["table"] ? $options_arr["table"] : false;
    }
    //--------------------------------------------------------------------------
    public function run() {
		if(!$this->table) { error_log("table not supplied"); } 
        $this->ci->load->dbforge();
        $this->dbforge = $this->ci->dbforge;
        $this->generate_fields_sql();
        $this->dbforge->create_table($this->table);
        
        foreach ($this->post_queries as $query) {
            Lib_database::query($query);
        }
    }
    //--------------------------------------------------------------------------
    public function generate_fields_sql() {
        $fields_arr = [];
        foreach ($this->fields_arr as $key => $data_arr) {
            if($key == $this->key){
                $fields_arr[$key] = [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ]; 
            }else{
                
                switch ($data_arr["type"]) {
                    case DB_INT: $fields_arr[$key] = ['type' => 'INT', 'constraint' => 11, 'default' => $this->db_obj->get_field_default($key)]; break;
                    case DB_VARCHAR: 
                    case DB_ENCRYPT: $fields_arr[$key] = ['type' => 'VARCHAR', 'constraint' => 256, 'default' => $this->db_obj->get_field_default($key)];  break;
                    case DB_TINYINT: $fields_arr[$key] = ['type' => 'TINYINT', 'constraint' => 4, 'default' => $this->db_obj->get_field_default($key)];  break;
                    case DB_DATETIME: $fields_arr[$key] = ['type' => 'DATETIME', 'null' => true];  break;
                    case DB_DATE: $fields_arr[$key] = ['type' => 'DATE', 'null' => true];  break;
                    case DB_YEAR: $fields_arr[$key] = ['type' => 'YEAR', 'null' => true];  break;
                    case DB_TEXT: $fields_arr[$key] = ['type' => 'TEXT', 'default' => ''];  break;
                    case DB_REFERENCE: 
                        $reference = $this->db_obj->get_field_reference_data($key);
                        if($reference["table"] && $reference["key"]){
                            $fields_arr[$key] = ['type' => 'INT', 'constraint' => 11, 'null' => true];
                            $this->post_queries[] = "ALTER TABLE `$this->table`
                            ADD CONSTRAINT `fk_$key` FOREIGN KEY (`$key`) REFERENCES `{$reference["table"]}` (`{$reference["key"]}`) ON UPDATE NO ACTION ON DELETE NO ACTION;";
                        }
                        break;
                }
            }
        }
        $this->dbforge->add_field($fields_arr);
        $this->dbforge->add_key($this->key, TRUE);
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
	public function get_fields_arr() {
		return $this->fields_arr;
	}
    //--------------------------------------------------------------------------
	public function get_db_obj() {
		return $this->db_obj;
	}
    //--------------------------------------------------------------------------
	public function get_dbforge() {
		return $this->dbforge;
	}
    //--------------------------------------------------------------------------
	public function get_post_queries() {
		return $this->post_queries;
	}
    //--------------------------------------------------------------------------
	public function set_table($table) {
		$this->table = $table;
		$this->db_obj = Lib_db::load_db_default($table);
        $this->key = $this->db_obj->get_key();
        $this->fields_arr = $this->db_obj->get_fields_arr();
	}
    //--------------------------------------------------------------------------
	public function set_key($key) {
		$this->key = $key;
	}
    //--------------------------------------------------------------------------
	public function set_fields_arr($fields_arr) {
		$this->fields_arr = $fields_arr;
	}
    //--------------------------------------------------------------------------
	public function set_db_obj($db_obj) {
		$this->db_obj = $db_obj;
	}
    //--------------------------------------------------------------------------
	public function set_dbforge($dbforge) {
		$this->dbforge = $dbforge;
	}
    //--------------------------------------------------------------------------
	public function set_post_queries($post_queries) {
		$this->post_queries = $post_queries;
	}
    //--------------------------------------------------------------------------
	public function create_multiple($table_arr = []) {
		foreach ($table_arr as $table) {
			$this->set_table($table);
			$this->run();
		}
	}
    //--------------------------------------------------------------------------
}
