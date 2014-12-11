<?php

	class MainClass {
		
		public function setRandomImageId(){
			
			return $randomNumberBike = rand(1, 12);
			
		}
		
		public function getLoadTime(){
			
			static $start;

			if (is_null($start)) {
				$start = microtime(true);
			} else {
				$diff = round((microtime(true) - $start), 3);
				$start = null;
				return $diff;
			}
		}
		
		public function getMotoCount($cart, $total){
			
			if( is_array($cart) ){
				foreach( $cart as $quantity ){
					$total += $quantity;					
				}				
			}			
			return $total;
			
		}
		
		public function getPages($view){

			switch( $view ){
					
				case "index":
					require_once("view/moto-list.php");
					break;
				
				case "standart":
				case "mountain":
				case "sport":
					require_once("view/moto-category.php");
					break;
					
				case "current":
					require_once("view/moto-current.php");
					break;
					
				case "cart-add":
					require_once("view/moto-cart-add.php");
					break;
					
				case "cart-clear":
					require_once("view/moto-cart-clear.php");
					break;
					
				case "cart-update":
					require_once("view/moto-cart-update.php");
					break;
					
				case "cart-checkout":
					require_once("view/moto-cart-checkout.php");
					break;
					
				case "cart-order":
					require_once("view/moto-cart-order.php");
					break;
					
				case "cart":
					require_once("view/moto-cart.php");
					break;
					
				default: 
					header("Location: http://localhost/shop");
			}
			
		}
		
	}
	
	$mainClass = new MainClass();
	$mainClass->getLoadTime();