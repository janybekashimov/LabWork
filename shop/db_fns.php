<?php 

	function db_connection(){
		$host = 'localhost';
		$user = 'shop_user';
		$pswd = 'admin123';
		$db = 'shop';

		$connection = mysql_connect($host, 	$user, $pswd);
		mysql_query("SET NAMES utf8");
		if(!connection || !mysql_select_db($db, $connection)){

			return false;

		}

		return $connection;	
	}

	$count = 0;

	function db_result_to_array($result){
		$res_array = array();

		while($row = mysql_fetch_array($result)){
			$res_array[$count] = $row;
			$count++;
		}
		return $res_array;
	}

	function get_products(){
		db_connection();
		$query = "SELECT * FROM products ORDER BY id DESC";

		$result = mysql_query($query);

		$result = db_result_to_array($result);
		return $result;
	}


	function get_cat_products($cat){
		db_connection();
		$query = "SELECT * FROM products WHERE cat='$cat' ORDER BY id DESC";

		$result = mysql_query($query);

		$result = db_result_to_array($result);
		return $result;
	}


	function get_cat(){
		db_connection();
		$query = "SELECT * FROM categories ORDER BY id DESC";

		$result = mysql_query($query);

		$result = db_result_to_array($result);
		return $result;
	}

	function get_product($id){
		db_connection();
		$query = ("SELECT * FROM products WHERE id='$id' ");

		$result = mysql_query($query);

		$row = mysql_fetch_array($result);

		return $row;

	}



 ?>