<?php 

	class Conecta{
	static $db_host = '127.0.0.1';
	static $db_user = 'root';
	static $db_pass = '';

	protected $db_name = 'mydb';
	public $query; 
	public $rows = array();
	private $conn;
	

	function open_connection() {
		$this->conn = new mysqli(self::$db_host, self::$db_user,self::$db_pass, $this->db_name);
	}
	function close_connection() {
		$this->conn->close();
	}
	//Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	function simple_query() {
		$this->open_connection();
		$this->conn->set_charset("utf8");
		$this->conn->query($this->query);
		$this->close_connection();
	}
	//Traer resultados de una consulta en un Array
	/*protected */
	function select_query() {	
		$this->open_connection();
		$this->conn->set_charset("utf8");
		$result = $this->conn->query($this->query);
		unset($this->rows); //inicializa el array
		while ($this->rows[] = $result->fetch_assoc());
		$result->close();
		$this->close_connection();
		array_pop($this->rows); //la consulta siempre manda un elemento nulo al final, con esta instruccion se extrae
	}
}

 ?>