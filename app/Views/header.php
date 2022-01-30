<?php

$site_url = base_url();
$local_style = $site_url."/assets/";
$image_url = $site_url."/assets/images/";
$css_url = $site_url."/assets/stylesheet/";
$script_url = $site_url."/assets/scripts/";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Giddy Goat Patchwork</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $css_url."style.css"?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $css_url."styles.css"?>" />
<script language="javascript" type="text/javascript">
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script language="javascript" type="text/javascript" src="<?php echo $script_url."mootools-1.2.1-core.js"?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo $script_url."mootools-1.2-more.js"?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo $script_url."slideitmoo-1.1.js"?>"></script>
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
      <li><a href="<?php echo $site_url ?>" class="current"><span></span>Home</a></li>
      <li><a href="<?php echo $site_url."/Home/classes" ?>"<span></span>Classes</a></li>
      <li><a href="<?php echo $site_url."/Home/fabrics" ?>"<span></span>Fabrics</a></li>
      <li><a href="<?php echo $site_url."/Home/notions" ?>"<span></span>Notions</a></li>
      <li><a href="<?php echo $site_url."/Home/gallery" ?>"<span></span>Gallery</a></li>
      <li><a href="<?php echo $site_url."/Home/contact" ?>"<span></span>Contact</a></li>
    </ul>
  </div>
  <!-- end of menu -->
  <div id="header_bar">
    <div id="header">
      <div class="right"></div>
      <h1><a href="#"> <img src="<?php echo $image_url."logo.png"?>" alt="" /> <span>Giddy Goat Patchwork</span> </a></h1>
    </div>
    <div id="search_box">
      <form action="#" method="get">
        <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
        <input type="submit" name="Search" value="" alt="Search" id="searchbutton" />
      </form>
    </div>
  </div>
  <!-- end of header_bar -->
  <div class="cleaner"></div>
  <div id="sidebar">
    <div class="sidebar_top"></div>
    <div class="sidebar_bottom"></div>
    <div class="sidebar_section">
      <h2>Members</h2>
      <form action="<?php echo base_url("login_Controller/Login");?>"  method="post"
<?php csrf_field() ?>
        <label>Username</label>
        <?php if (isset($validation)) { echo $validation->getError('emailAddress'); }?><br/>
        <input type="text" value="" name="emailAddress" size="10" class="input_field"
        value="<?php echo set_value('emailAddress'); ?>" />
        <label>Password</label>
        <?php if (isset($validation)) { echo $validation->getError('password'); }?><br/>
        <input type="password" value="" name="password" class="input_field" />
        <a <?php echo anchor('Home/register','Register'); ?></a>
        <input type="submit" name="login" value="Login" alt="Login" id="submit_btn" />
      </form>
      <div class="cleaner"></div>
    </div>
    <div class="sidebar_section">
      <h2>Categories</h2>
      <ul class="categories_list">
        <li><a href="#">Adult and Children Classes</a></li>
        <li><a href="#">Fabrics</a></li>
        <li><a href="#">Notions</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="sidebar_section">
      <h2>Special Offers</h2>
      <div class="image_wrapper"><a href="#"><img src="<?php echo $image_url."image_01.jpg"?>" alt="" /></a></div>
      <div class="discount"><span>25% off</span> | <a href="#">Read more</a></div>
    </div>
  </div>
