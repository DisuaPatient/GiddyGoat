<?php 
	$images_folder = "http://localhost:8081/CI4-GG/assets/images/";
	$stylesheet_folder = "http://localhost:8081/CI4-GG/assets/stylesheet/";
	$script_folder = "http://localhost:8081/CI4-GG/assets/scripts/";
?>	
	
<div class="cleaner"></div>
  <div id="sidebar">
    <div class="sidebar_top"></div>
    <div class="sidebar_bottom"></div>
    <div class="sidebar_section">
      <h2>Members</h2>
      <form action="#" method="get">
        <label>Username</label>
        <input type="text" value="" name="username" size="10" class="input_field" />
        <label>Password</label>
        <input type="password" value="" name="password" class="input_field" />
        <a href="#">Register</a>
        <input type="submit" name="login" value="Login" alt="Login" id="submit_btn" />
      </form>
      <div class="cleaner"></div>
    </div>
    <div class="sidebar_section">
      <h2>Categories</h2>
      <ul class="categories_list">
	
        <li><?php echo anchor('Home/classes','Adult and Children Classes'); ?></li>
        <li><?php echo anchor('Home/fabrics','Fabrics'); ?></li>
        <li><?php echo anchor('Home/notions','Notions'); ?>"</li>
        <li><?php echo anchor('Home/gallery','Gallery'); ?>"</li>
        <li><?php echo anchor('Home/contact','Contact'); ?>"</li>
      </ul>
    </div>
    <div class="sidebar_section">
      <h2>Special Offers</h2>
	  	  <?php echo anchor('Home/UpdateEntry', 'Update Address Book Entry'); ?> 
      <div class="image_wrapper"><a href="#"><img src="<?php echo $images_folder."image_01.jpg" ; ?> alt="" /></a></div>
      <div class="discount"><span>25% off</span> | <a href="#">Read more</a></div>
    </div>
  </div>
  <!-- end of sidebar -->
  <div id="content">
    <div id="latest_product_gallery">
      <h2>Featured Products</h2>
      <div id="SlideItMoo_outer">
        <div id="SlideItMoo_inner">
          <div id="SlideItMoo_items">
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_01.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_02.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_03.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_04.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_05.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_06.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_07.png"; ?> alt="" /></a> </div>
            <div class="SlideItMoo_element"> <a href="#"> <img src="<?php echo $images_folder."product_08.png"; ?> alt="" /></a> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of latest_content_gallery -->
    <div class="content_section">
      <h2>Welcome to Giddy Goat Patchwork</h2>
      <p>Fun adults & children's weekly sewing / patchwork/quilting classes! We stock beautiful fabric and other sewing needs. Suitable for all levels of ability.</p>
    </div>
    <div class="content_section">
      <h2>Our Products</h2>
      <div class="product_box margin_r35">
        <h3>Classes</h3>
        <div class="image_wrapper"> <a href="#"><img src="<?php echo $images_folder."image_01.jpg"; ?> alt="" /></a> </div>
        <p class="price">Price: $350</p>
        <a href="#">Detail</a> | <a href="#">Buy Now</a> </div>
      <div class="product_box margin_r35">
        <h3>Fabrics</h3>
        <div class="image_wrapper"> <a href="#"><img src="<?php echo $images_folder."image_02.jpg"; ?>  alt="" /></a> </div>
        <p class="price">Price: $550</p>
        <a href="#">Detail</a> | <a href="#">Buy Now</a> </div>
      <div class="product_box">
        <h3>Notions</h3>
        <div class="image_wrapper"> <a href="#"><img src="<?php echo $images_folder."image_03.jpg"; ?>  alt="" /></a> </div>
        <p class="price">Price: $250</p>
        <a href="#">Detail</a> | <a href="#">Buy Now</a> </div>
      <div class="cleaner"></div>
      <div class="product_box margin_r35">
        <h3>Workshops</h3>
        <div class="image_wrapper"> <a href="#"><img src="<?php echo $images_folder."image_04.jpg"; ?>  alt="" /></a> </div>
        <p class="price">Price: $850</p>
        <a href="#">Detail</a> | <a href="#">Buy Now</a> </div>
      <div class="product_box margin_r35">
        <h3> Gallery</h3>
        <div class="image_wrapper"> <a href="#"><img src="<?php echo $images_folder."image_05.jpg"; ?>  alt="" /></a> </div>
        <p class="price">Price: $450</p>
        <a href="#">Detail</a> | <a href="#">Buy Now</a> </div>
      <div class="product_box">
        <h3> Vivamus at justo</h3>
        <div class="image_wrapper"> <a href="#"><img src="<?php echo $images_folder."image_06.jpg"; ?>  alt="" /></a> </div>
        <p class="price">Price: $350</p>
        <a href="#">Detail</a> | <a href="#">Buy Now</a> </div>
      <div class="cleaner"></div>
      <div class="button_01"><a href="#">View All</a></div>
    </div>
  </div>
  <!-- end of content -->
</div>

