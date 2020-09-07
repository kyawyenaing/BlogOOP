<?php 
class Database {
	private $connection;
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $db_name = "blog_oop";

	public function getConnection()
	{
		try{
			$this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username,$this->password);
			return $this->connection;
		}catch(PDOException $e) {
			die($e->getMessage());
		}
	}
}

