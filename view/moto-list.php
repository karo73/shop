<?php
	require_once("lib/db_class.php");
	
	$start = isset($_GET["page"]) ? $_GET["page"] : 1;
	$db->getStart($start);
	
	$marginNone = "";
	$i = 0;
	foreach($db->getProducts() as $item){
	$marginNone = ( $i % 4 == 0 ) ? " m-l-none" : "";
?>
		<div class="moto-blocks fl tupper<?php echo $marginNone; ?>">
			<a class="db" href="index.php?view=current&id=<?php echo $item["id"]; ?>">
				<img src="images/<?php echo $item["image"]; ?>" alt="<?php echo $item["alt"]; ?>" width="100%" />
				<span class="db"><?php echo $item["title"]; ?></span>
				<span>price - &euro;<?php echo $item["price"]; ?></span>
			</a>
		</div>
<?php	
	if( $i % 4 == 3 ) echo '<div class="cb"></div>';
	$i++;
	} 
?>
<div class="cb"></div>
<div class="pagination">
<?php
	echo $db->pagination();
?>
</div>