<?php
$controller_base = base_url() . "index.php/";

$cart_link = site_url()."/ShoppingCart_controller/AddItemtoCart/" . $item_id;
?>
<html>
    <head>
        <title>My Store</title>
    </head>
    <body>
		<?php echo form_open($cart_link); ?>

		  <?php 
			if (isset($itemDetails)) {
				//If items selected do not exist		
				if ($itemDetails->getNumRows() < 1) {
					//invalid item 
					echo "<p><em>Invalid item selection.</em></p>";
				} else {
		            //Retrieve the details for the selected Item
					foreach ($itemDetails->getResultArray() as $item_info) {
						$cat_id = $item_info['cat_id'];
						$cat_title = strtoupper(stripslashes($item_info['cat_title']));
						$item_title = stripslashes($item_info['item_title']);
						$item_price = $item_info['item_price'];
						$item_desc = stripslashes($item_info['item_desc']);
						$item_image = base_url()."/assets/images/".$item_info['item_image'];
						$category_link = site_url().'/CategoryItems_controller/GetCategoryItems/' . $cat_id;
		?>					
						<h1>My Store - Item Details </h1><!-- make breadcrumb trail - links  -->
						<h2><strong><em>You are Viewing:</em>
						<a href = <?php echo $category_link;?>><?php echo $cat_title;?></a>&gt;<?php echo $item_title; ?></strong></p></h2>
						<table cellpadding=\"3\" cellspacing=\"3\">
						<tr>
						<td valign="middle" align="center"><img src= <?php echo $item_image; ?> width="100px" height="100px"></td>
						</tr>
						<tr>
						<td valign="middle"><p><strong>Price:   </strong><input type="text"name="price" value = <?php echo $item_price; ?>></td>
						</tr>
						<td valign="middle"><p><strong>Description:</strong><?php echo $item_desc; ?></td>
						 </table>
					<?php }  
				} ?>
				
				<?php
				//If colours for this item exist
				if (isset($itemColors) ) {
					
					if ($itemColors->getNumRows() > 0) {   ?>
						<p><strong>Available Colors:  </strong>
						<select name="color">;
						<?php 		
							//Store query details in associative array 
							foreach ($itemColors->getResultArray() as $colors) {
								$id = $colors['colour_id'];
								$item_color = $colors['item_colour'];
								?>
								<option value=<?php echo $id; ?>><?php echo $item_color;?></option>
							<?php } ?>
						</select>
					<?php } 
				} ?>
		

				<?php
				if (isset($itemSizes)) {
					//If size for this item exist
					if ($itemSizes->getNumRows() > 0) {
						?>
						<p><strong>Available Sizes:  </strong>
						<select name="size">
						<?php 
						//Store query details in associative array 
						foreach ($itemSizes->getResultArray() as $sizes) {
							$id = $sizes['size_id'];
							$item_size = $sizes['item_size'];
							?>
							<option value = <?php echo $id; ?>><?php echo $item_size; ?></option>
						<?php } ?>
						</select>
				<?php } } ?>  

		<p><strong>Select Quantity:</strong>
			<select name="qty">
			<?php
				for ($i = 1; $i <= 10; $i++) {
					echo "<option value=\"" . $i . "\">" . $i . "</option>";
				}
			?>
			</select>

			<?php } ?>	
			
			<input type="hidden" name="item_id" value=<?php echo $item_id ?>>
			<p><input type="submit" name="submit" value="Add to Cart"></p>

        </form>

<?php echo anchor('Home/index', 'Continue Shopping'); ?>

</body>
</html>