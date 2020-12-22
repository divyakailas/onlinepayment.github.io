<?php
class configlogin {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "web";
	private $conn;
        
        function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
        }
?>
