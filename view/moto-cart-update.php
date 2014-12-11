<?php
	
	if( isset($_POST["cart_update"]) ){
		
		foreach( $_SESSION["cart"] as $id => $quantity ){
			if( $_POST[$id] == "0" ){
				unset( $_SESSION["cart"][$id] );
			} else {
				$_POST[$id] > 9 ? $_POST[$id] = 9 : $_POST[$id];
				$_SESSION["cart"][$id] = $_POST[$id];
			}
		}
		
		header("Location: ".$_SERVER["HTTP_REFERER"]);
	
	} else {
		header("Location: http://localhost/shop");
	}