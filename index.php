<?php

include_once "class/Database.php";
include_once "class/Products.php";

if(isset($_GET['search']) && $_GET['search'] !=null){
	$products = Products::search($_GET['search']);
} else {
	$products = Products::get_all();
}


if(isset($_GET['id']) && $_GET['id'] !=null){
	$product = Products::get($_GET['id']);
	include 'view/single_product.php';
} else {
	include "view/list.php";
}

/*$db = new Database();
$products = $db->select_array("SELECT * FROM products");*/

//$products = Products::get_all();
//$products = Products::get(2);
//$random_product = Products::random_products(4);
//$products = Products::search("le");


//include 'view/list.php';
