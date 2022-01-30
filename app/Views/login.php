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
<link rel="stylesheet" type="text/css" href="<?php echo $css_url."my.css"?>" />
<link rel="stylesheet" type="text/css" href="<?php echo $css_url."bootstrap.min.css"?>" />
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
<style>
  .modal-header {background:#e1d1d6;color:#fff;font-weight:800;}
  .modal-body{font-weight:800;}
  .modal-body ul{list-style:none;}
  .modal .btn {background:#D67B22;color:#fff;}
  .modal a{color:#D67B22;}
  .modal-backdrop {position:inherit !important;}
   #login_button,#register_button{background:none;color:#D67B22!important;}
   #query_button {position:fixed;right:0px;bottom:0px;padding:10px 80px;
                  background-color:#D67B22;color:#fff;border-color:#f05f40;border-radius:2px;}
@media(max-width:767px){
    #query_button {padding: 5px 20px;}
}
</style>
</head>
<bo<dy>
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

  </div>

</div>
  </body>
  </html>
  <!-- end of header_bar -->




  <li>


          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title text-center">Login Form</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo base_url("login_Controller/Login");?>"  method="post"
  	<?php csrf_field() ?>
                                accept-charset="UTF-8">
                                    <div class="form-group">
                                        <label class="sr-only" for="username">Username</label>
                                          <?php if (isset($validation)) { echo $validation->getError('emailAddress'); }?><br/>
                                        <input type="text" name="emailAddress" class="form-control" placeholder="Username"
                                        value="<?php echo set_value('emailAddress'); ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                          <?php if (isset($validation)) { echo $validation->getError('password'); }?><br/>
                                        <input type="password" name="password" class="form-control"  placeholder="Password"
                                       >
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" value="login" class="btn btn-block">
                                            Sign in
                                        </button>
                                    </div>
                                </form>
                  </div>
                  <div class="modal-footer">
                  <?php echo anchor('Home/register/', 'Not a member SignUp'); ?>
                </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
        </div>
  </li>




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
      Copyright &copy; 2048 <a href="#">Giddy Goat Patchwork</a> | Designed by <a target="_blank" rel="nofollow" href="http://www.templatemo.com">templatemo</a></div>
    <!-- end of footer -->
  </div>
  <!-- end of footer_wrapper -->
