<?php 
	$images_folder = "http://localhost:8081/CI4-GG/assets/images/";
	$stylesheet_folder = "http://localhost:8081/CI4-GG/assets/stylesheet/";
	$script_folder = "http://localhost:8081/CI4-GG/assets/scripts/";
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel = "stylesheet" type = "text/css" href = "<?php echo $stylesheet_folder."style.css";?>">
<link rel = "stylesheet" type = "text/css" href = "<?php echo $stylesheet_folder."styles.css";?>">

<script language="javascript" type="text/javascript" src ="<?php echo $script_folder;?>">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script language="javascript" type="text/javascript" src="<?php echo $script_folder."mootools-1.2.1-core.js";?>></script>
<script language="javascript" type="text/javascript" src="<?php echo  $script_folder."mootools-1.2-more.js";?>></script>
<script language="javascript" type="text/javascript" src="<?php echo  $script_folder."slideitmoo-1.1.js";?>></script>
<script language="javascript" type="text/javascript">
window.addEvents({
    'domready': function () { /* thumbnails example , div containers */
        new SlideItMoo({
            overallContainer: 'SlideItMoo_outer',
            elementScrolled: 'SlideItMoo_inner',
            thumbsContainer: 'SlideItMoo_items',
            itemsVisible: 5,
            elemsSlide: 3,
            duration: 200,
            itemsSelector: '.SlideItMoo_element',
            itemWidth: 140,
            showControls: 1
        });
    },

});
</script>

    </head>
 
    <body>
<div id="wrapper">
  <div id="menu">
    <ul>
      <li><a href="<?php echo site_url('Home/index'); ?>" class="current"><span></span>Home</a></li>
      <li><a href="<?php echo site_url('Home/classes'); ?>"><span></span>Classes</a></li>
      <li><a href="<?php echo site_url('Home/fabrics'); ?>"><span></span>Fabrics</a></li>
      <li><a href="<?php echo site_url('Home/notions'); ?>"><span></span>Notions</a></li>
      <li><a href="<?php echo site_url('Home/gallery'); ?>"><span></span>Gallery</a></li>
      <li><a href="<?php echo site_url('Home/contact'); ?>"><span></span>Contact</a></li>
    </ul>
  </div>
  <!-- end of menu -->
  <div id="header_bar">
    <div id="header">
      <div class="right"></div>
      <h1><a href="<?php echo site_url('Home/index'); ?>"> <img src="<?php echo $images_folder."logo.png";?>> alt="" /> <span>Giddy Goat Patchwork</span> </a></h1>
    </div>
    <div id="search_box">
      <form action="#" method="get">
        <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" />
      </form>
    </div>
  </div>
      
        <div class="wrapper">
             
            <?php echo $body; ?>
             
        </div>
 
    <div id="footer_wrapper">
  <div id="footer">
    <ul class="footer_menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">CSS Templates</a></li>
      <li><a href="#">Flash Resources</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Company</a></li>
      <li class="last_menu"><a href="#">Contact</a></li>
    </ul>
    Copyright &copy; 2048 <a href="#">Your Company Name</a> | Designed by <a target="_blank" rel="nofollow" href="http://www.templatemo.com">templatemo</a></div>
  <!-- end of footer -->
</div>
<!-- end of footer_wrapper -->
</body>
</html>

