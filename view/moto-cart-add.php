<?php
	
	class Cart {
	
		public function getId($id){
			
			if( isset($_SESSION["cart"][$id]) ){
				$_SESSION["cart"][$id]++;
				$_SESSION["cart"][$id] > 9 ? $_SESSION["cart"][$id] = 9 : $_SESSION["cart"][$id];
			
			} else {
				
				$_SESSION["cart"][$id] = 1;
			
			}
			
			header("Location: ".$_SERVER["HTTP_REFERER"]);
		}
		
	}
	
	$cart = new Cart();
	
	if( isset($_GET["id"]) ) $cart->getId($_GET["id"]);