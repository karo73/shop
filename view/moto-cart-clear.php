<?php

	if( !empty($_SESSION["cart"]) ){
		session_destroy();
		header("Location: http://localhost/shop");
	} else {
		header("Location: http://localhost/shop");
	}