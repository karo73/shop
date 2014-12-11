<?php
	if( !empty($_SESSION["cart"]) ){
	require_once("lib/db_class.php");
?>
<div class="cart-block">
	<form action="index.php?view=cart-order" method="post">
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
				<td><?php echo $quantity; ?></td>
				<td>&euro;<?php echo $item["price"] * $quantity; ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="5">
					<label class="fr">Name:<br />
						<input type="text" name="checkout[name]" required="required" />
					</label>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<label class="fr">Lastname:<br />
						<input type="text" name="checkout[lastname]" required="required" />
					</label>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<label class="fr">Address:<br />
						<input type="text" name="checkout[address]" required="required" />
					</label>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<label class="fr">Post index:<br />
						<input type="text" name="checkout[post_index]" required="required" />
					</label>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<label class="fr">E-mail:<br />
						<input type="text" name="checkout[email]" required="required" />
					</label>
				</td>
			</tr>
			<tr>
				<td colspan="5">
					<label class="fr">Phone:<br />
						<input type="text" name="checkout[phone]" required="required" />
					</label>
				</td>
			</tr>
			<tr>
				<th class="all-price fb">All price is - &euro;<?php echo $_SESSION["total_price"]; ?></th>
				<th colspan="4">
					<input type="submit" class="btn btn-success" name="cart_checkout" value="Checkout" />
				</th>
			</tr>
		</table>
	</form>
</div>
<?php } else { ?>

	<p class="empty-info tcenter">Your cart is empty!!!</p>

<?php } ?>