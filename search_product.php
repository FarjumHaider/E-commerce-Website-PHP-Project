<?php
	include 'controllers/ProductController.php';
	$key = $_GET["key"];
	$products = searchProduct($key);

	if(count($products) > 0){
		foreach($products as $p){
			echo "<a class='search_contain' href='edit_product.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		}
	}
?>
