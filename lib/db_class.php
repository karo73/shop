<?php

	class DB {
		
		// Database
		private $mysqli = "";
		private $host = "localhost";
		private $user = "root";
		private $pswd = "";
		private $db = "moto_shop";
		
		// Pagination
		public $start;
		private $limit = 4;
		
		public function __construct(){
			
			$this->mysqli = new mysqli($this->host, $this->user, $this->pswd, $this->db );
	
		}
		
		public function getStart($page){
		
			$result = $this->mysqli->query("SELECT `id` FROM `category`");			
			$end = floor(mysqli_num_rows($result) / $this->limit);
			
			if($page > $end) $page = $end;
			if($page <= 0) $page = 1;
					
			$this->start = ($page - 1) * $this->limit;
			
		}
		
		public function pagination(){
			
			$result = $this->mysqli->query("SELECT `id` FROM `category`");			
			$end = floor(mysqli_num_rows($result) / $this->limit);
			
			$page = isset($_GET["page"]) ? $_GET["page"] : 1;
			
			for( $i = 1; $i <= $end; $i++ ){
				if( $page == $i ){
					echo "<span class='pagination-links pagination-active-link fb' href='index.php?page=".$i."'>".$i."</span>";
				} else {
					echo "<a class='pagination-links' href='index.php?page=".$i."'>".$i."</a>";
				}
			}
			
		}
		
		public function getProducts(){
			
			$result = $this->mysqli->query("SELECT * FROM `category` LIMIT ".$this->start.",".$this->limit."");
			
			$i = 0;
			while($row = $result->fetch_assoc()){
				$data[$i] = $row;
				$i++;
			}
			
			return $data;
	
		}
		
		public function getCategories($view){
			
			$result = $this->mysqli->query("SELECT * FROM `category` WHERE `cat`='".$view."'");
			
			$i = 0;
			while($row = $result->fetch_assoc()){
				$data[$i] = $row;
				$i++;
			}
			
			return $data;
	
		}
		
		public function getCurrentMoto($id){
			
			$result = $this->mysqli->query("SELECT `image`, `title`, `alt`, `price` FROM `category` WHERE `id`='".$id."'");
			
			$row = $result->fetch_assoc();
			
			return $row;
			
		}
		
		public function getCartList($id){
			
			$result = $this->mysqli->query("SELECT `image`, `title`, `alt`, `price` FROM `category` WHERE `id`='".$id."'");

			return $row = $result->fetch_assoc();
			
		}
		
		public function insertCheckout($name, $lastname, $address, $post_index, $email, $phone, $order_name, $order_price, $order_quantity, $order_all_price, $order_date, $order_time){
			
			$result = $this->mysqli->query("INSERT INTO `order` (
																	`name`,
																	`lastname`,
																	`address`,
																	`post_index`,
																	`email`,
																	`phone`,
																	`order_name`,
																	`order_price`,
																	`order_quantity`,
																	`order_all_price`,
																	`order_date`,
																	`order_time`) VALUES(
																							'$name',
																							'$lastname',
																							'$address',
																							'$post_index',
																							'$email',
																							'$phone',
																							'$order_name',
																							'$order_price',
																							'$order_quantity',
																							'$order_all_price',
																							'$order_date',
																							'$order_time') ");
			
		}
		
		public function __destruct(){
			$this->mysqli->close();
		}
		
	}
	
	$db = new DB();