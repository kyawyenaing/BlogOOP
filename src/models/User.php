<?php 
require __DIR__ . '../../config/Database.php';
class User {
	private $connection;
	public function  __construct() {
		$db = new Database();
		$this->connection = $db->getConnection();
		    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
	}
	public function Register($email,$password) {
		try{
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$statement = $this->connection->prepare('INSERT INTOs users (email,password) VALUES(:email,:password)');
		     $statement->bindparam(":email", $umail);
		     $statement->bindparam(":password", $password);            
		     $statement->execute(); 
		     return $statement;
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}