<?php

abstract class TopBase {
	
	
	protected $db;
	
	public function __construct() {
		$this->db = mysql_connect(HOST,USER,PASSWORD);
		if(!$this->db) {
			exit("Ошибка соединения с базой данных".mysql_error());
		}
		if(!mysql_select_db(DB,$this->db)) {
			exit("Нет такой базы данных".mysql_error());
		}
		mysql_query("SET NAMES 'UTF8'");
		
	}

	protected function get_header() {
		include "views/header.php";
	}
	
		

	
	protected function get_footer() {
		include "views/footer.php";
	}
		

	
	
	public function get_body() {
				if($_POST) {
			$this->obr();
		}
		$this->get_header();
		$this->get_content();
		$this->get_footer();
	}
	
	abstract function get_content();
	
}

?>