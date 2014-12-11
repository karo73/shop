<?php
	require_once("lib/db_class.php");
	$id = $_GET["id"];
	$data = $db->getCurrentMoto($id);
?>

	<div class="moto-blocks fl tupper m-l-none">
		<a class="db" href="index.php?view=current&id=<?php echo $id; ?>">
			<img src="images/<?php echo $data["image"]; ?>" alt="<?php echo $data["alt"]; ?>" width="100%" />
			<span class="db"><?php echo $data["title"]; ?></span>
			<span>price - &euro;<?php echo $data["price"]; ?></span>
		</a>
	</div>
	<div class="cart-link-block">
		<h2 class="fb">Desription</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		<a class="btn btn-inverse" href="index.php?view=cart-add&id=<?php echo $id; ?>">Add to cart</a>
	</div>
	<div class="cb"></div>