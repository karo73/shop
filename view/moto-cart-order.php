<?php

	if( !empty($_SESSION["cart"]) && isset($_POST["cart_checkout"]) ){
		
		require_once("lib/db_class.php");
	
		$formItems = array();
		
		foreach($_POST["checkout"] as $key => $value){
			$formItems[$key] = $value;
		}
		
		date_default_timezone_set("Asia/Yerevan"); 
		
		$date = date("Y-m-d");
		$time = date("H:i:s");

		foreach( $_SESSION["cart"] as $id => $quantity ){
			$item = $db->getCartList($id);
				
			$db->insertCheckout($formItems["name"],
								$formItems["lastname"],
								$formItems["address"],
								$formItems["post_index"],
								$formItems["email"],
								$formItems["phone"],
								$item["title"],
								$item["price"]."&euro;",
								$quantity,
								$item["price"] * $quantity."&euro;",
								$date,
								$time);
				
		}
		
		session_destroy();
		
		echo "<p class='success-order-info tcenter'>. Thank you for buying. Your order has been sended!!!</p>";
		
	} else {
		header("Location: http://localhost/shop");
	}