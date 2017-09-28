<?php 

include_once "Database.php";

class Products {

	public static function get_all(){

		$db = new Database();
		$products = $db->select_array("SELECT * FROM products");
		return $products;
	}

	public static function get($id){

		$db = new Database();
		$products = $db->select_array("SELECT * FROM products WHERE id = " .$id);
		return $products;
	}

	public static function search($query){

		$query = strtolower($query);
		$db = new Database();
		$products_by_name = $db->select_array("SELECT * FROM products WHERE LOWER(name) LIKE  '%" . $query . "%'");
		$products_by_descr = $db->select_array("SELECT * FROM products WHERE LOWER (descr) LIKE  '%" . $query . "%'");

		$fullarray = array_merge($products_by_name, $products_by_descr);
		return array_unique($fullarray, SORT_REGULAR);

	// LOWER - mazosiomis raidemis. 
	}
}

