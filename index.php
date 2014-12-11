<?php	
	require_once("lib/Main_class.php");
	require_once("lib/all_price_class.php");
	$view = (empty($_GET["view"])) ? "index" : $_GET["view"];
	$randomId = $mainClass->setRandomImageId();
	
	session_start();
	if( !isset($_SESSION["cart"]) ){
		$_SESSION["cart"] = array();
		$_SESSION["total_items"] = 0;
		$_SESSION["total_price"] = 0;
	}
	
	$totalMoto = $mainClass->getMotoCount($_SESSION["cart"], $_SESSION["total_items"]);
	
	$_SESSION["total_price"] = $allPrice->getMotoPrice($_SESSION["cart"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>BMW Motorcycles</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
</head>

<body>	
	<div id="wrapper">
		<div class="header">
			<div class="random-block fr">
				<a href="index.php?view=current&id=<?php echo $randomId; ?>">
					<img id="random-bike" src="images/moto-<?php echo $randomId; ?>.jpg" alt="Motorcycles" width="100%" />
				</a>
			</div>
			<h1 class="fl">
				<a class="db" href="index.php" title="Motorcycles">Motorcycles</a>
			</h1>			
			<p class="load-info fl">Page loaded all over <?php echo $mainClass->getLoadTime(); ?> second</p>
			<div class="cb"></div>
			<p class="cart-info fr">
				<a href="index.php?view=cart">Total of your cart items (<?php echo $totalMoto; ?>)</a>
				<span> - &euro;<?php echo $_SESSION["total_price"]; ?></span>
			</p>
			<ul class="navigation tcenter">
				<li>
					<a class="<?php echo $active = ($view == "index") ? "active" : ""; ?>" href="index.php">Home</a>
				</li>
				<li>
					<a class="<?php echo $active = ($view == "standart") ? "active" : ""; ?>" href="index.php?view=standart">Standart motos</a>
				</li>
				<li>
					<a class="<?php echo $active = ($view == "mountain") ? "active" : ""; ?>" href="index.php?view=mountain">Mountain motos</a>
				</li>
				<li>
					<a class="<?php echo $active = ($view == "sport") ? "active" : ""; ?>" href="index.php?view=sport">Sport motos</a>
				</li>
			</ul>
		</div>
		<div class="content">
			<?php echo $mainClass->getPages($view); ?>
		</div>
		<div class="footer">
			<p class="fr">Copyright &copy; <?php echo date("Y"); ?></p>
			<p>Website by Karo Hakobyan. All rights reserved</p>
		</div>
	</div>	
</body>
</html>