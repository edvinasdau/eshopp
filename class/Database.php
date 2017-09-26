<?php

Class Database {

	private $conn;

	function __construct($servername = "localhost", $username = "root", $password = "", $database = "shop") {
		try {
			$this->conn = new PDO("mysql:host=$servername;dbname=shop; charset=utf8", $username, $password);
		    // set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Prisijungiau"; 
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
	}
	function __destruct() {
		$this->conn = null;

	}

	public function select_array($sql) {
		$request = $this->conn->prepare($sql); 
		$request->execute();
		$result = $request->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function select($sql) {
		$request = $this->conn->prepare($sql); 
		$request->execute();
		$result = $request->fetchAll(PDO::FETCH_ASSOC);
		return $result[0];
	}

	public function insert_hard_way($t, $f, $v) {

		$sql = "INSERT INTO $t (";

		foreach ($f as $column) {
			$sql .= $column . ", ";
		}

		$sql = rtrim($sql, ",");

		$sql .= ") VALUES (";

		foreach ($v as $value) {
			$sql .= "'". $value . "',";
		}

		$sql = rtrim($sql, ",");

		$sql .= ")";


		/*firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";*/
    	echo $sql;
    	die($sql);

		$request = $this->conn->prepare($sql); 
		$request->execute();
    }

    public function insert($sql) {
    	$request = $this->conn->prepare($sql);
    	$request->execute();
    }
	
}

function show($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

$db = new Database();
//show($db->select("SELECT * FROM products"));
show($db->select_array("SELECT * FROM products LIMIT 1"));

