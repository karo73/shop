<?php
	
	class AllPrice {
	
		private $mysqli = "";
		private $host = "localhost";
		private $user = "root";
		private $pswd = "";
		private $db = "moto_shop";
		
		public function __construct(){
			
			$this->mysqli = new mysqli($this->host, $this->user, $this->pswd, $this->db );

		}
		
		public function getMotoPrice($cart){
			
			$total = 0;
			
			if( is_array($cart) ){
				foreach( $cart as $id => $quantity ){
					$result = $this->mysqli->query("SELECT `price` FROM `category` WHERE `id`='".$id."'");
					$row = $result->fetch_assoc();
					$total += $quantity * $row["price"];
				}				
			}			
			return $total;
			
		}
		
	}
	
	$allPrice = new AllPrice();