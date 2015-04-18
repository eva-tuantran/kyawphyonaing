<?php
	$categories = $this->getcategories;
	if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
	$startrow = 0;
  	$category = array_slice($categories, 0, 4);
	} else {
 	 $startrow = (int)$_GET['startrow'];
 	// echo $startrow;
 	 $category = array_slice($categories, $startrow, 4);
	}
?>
<?php
	if(Session::get('loggedIn') == true)
	echo '<p><a class="button" href="'.URL.'upload">ADD</a></p>';
	?>
<?php foreach ($category as $i=>$item) : ?>
<div class="prod"<?php echo $i % 2; ?>>
	<?php // Set up the images
	$image = 'public/images/'. $item['cat_image']; 
		if (!is_file($image)) {
			$image = 'public/images/nophoto.jpg';
		}
	?>
	<div class="prodimg"><a href="#"><img alt="" src="<?php echo $image; ?>" border="0" height="100" width="119" /></a></div>
	<div class="txt">
	<h2><?php echo htmlspecialchars($item['cat_name']); ?></h2><br />
	<p><a href="#" class="info"><?php echo htmlspecialchars($item['cat_description']); ?></a></p>
	</div>
	<div class="price"><?php echo htmlspecialchars($item['cat_prize']); ?></div>
	<div class="action"><br />
	<?php
	if(Session::get('loggedIn') == true){
	echo '<p><a class="button" href="'.URL.'index/edit/'.$item['cat_id'].'">Edit</a></p>';
	echo '<p><a class="button" href="'.URL.'index/delete/'.$item['cat_id'].'">Delete</a></p>';
	}
	?>
	</div>
</div>
<?php endforeach; ?>

<?PHP
	$pre=$startrow-4;
	if ($pre >= 0)
	echo '<a class="button" href="'.$_SERVER['PHP_SELF'].'?startrow='.$pre.'">Previous</a>';
?>
</n>
<?PHP
	$next=$startrow+4;
	if ($next<=count($categories))
	echo '<a class="button" href="'.$_SERVER['PHP_SELF'].'?startrow='.$next.'">Next</a>';
?>
