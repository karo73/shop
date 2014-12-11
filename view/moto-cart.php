<?php
	if( !empty($_SESSION["cart"]) ){
	require_once("lib/db_class.php");
?>
<div class="cart-block">
	<form action="index.php?view=cart-update" method="post">
		<table width="100%">
			<tr class="fb">
				<td class="fb">Name</td>
				<td class="fb">Picture</td>
				<td class="fb">Price</td>
				<td class="fb">Count</td>
				<td class="fb">Price count</td>
			</tr>
			<?php 
				foreach( $_SESSION["cart"] as $id => $quantity ){
				$item = $db->getCartList($id);
			?>
			<tr>
				<td><?php echo $item["title"]; ?></td>
				<td>
					<img src="images/<?php echo $item["image"]; ?>" alt="<?php echo $item["alt"]; ?>" width="100" />
				</td>
				<td>&euro;<?php echo $item["price"]; ?></td>
				<td>
					<input type="text" name="<?php echo $id; ?>" value="<?php echo $quantity; ?>" maxlength="1" />
				</td>
				<td>&euro;<?php echo $item["price"] * $quantity; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<th class="all-price fb">All price is - &euro;<?php echo $_SESSION["total_price"]; ?></th>
				<th colspan="4">
					<a class="btn btn-danger" href="index.php?view=cart-clear">Clear cart</a>
					<input type="submit" class="btn btn-info" name="cart_update" value="Update cart" />
					<a class="btn btn-success" href="index.php?view=cart-checkout">Checkout</a>
				</th>
			</tr>
		</table>
	</form>
</div>
<?php } else { ?>

	<p class="empty-info tcenter">Your cart is empty!!!</p>

<?php } ?>