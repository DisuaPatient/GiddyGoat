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

  <!-- end of header_bar -->




  <li>

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Member Registration Form</h4>
                </div>
                <div class="modal-body">
                 <div>
                  <form method="post" action="<?php echo base_url("login_Controller/Register");?>">

                                  <div class="form-group">
                                      <label class="sr-only" for="username">First Name</label>
                                      <?php if (isset($validation)) { echo $validation->getError('fName'); }?><br/>
                                      <input type="text" name="fName" class="form-control" placeholder="First Name"
                                        value="<?php echo set_value('fName'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">Last Name</label>
                                      <?php if (isset($validation)) { echo $validation->getError('lName'); }?><br/>
                                      <input type="text" name="lName" class="form-control" placeholder="Last Name"
                                        value="<?php echo set_value('lName'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">Email</label>
                                      <?php if (isset($validation)) { echo $validation->getError('emailAddress'); }?><br/>
                                      <input type="text" name="emailAddress" class="form-control" placeholder="Email"
                                        value="<?php echo set_value('emailAddress'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">Country</label>
                                      <?php if (isset($validation)) { echo $validation->getError('country'); }?><br/>
                                      <input type="text" name="country" class="form-control" placeholder="Country"
                                        value="<?php echo set_value('country'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">County</label>
                                      <?php if (isset($validation)) { echo $validation->getError('county'); }?><br/>
                                      <input type="text" name="county" class="form-control" placeholder="County"
                                        value="<?php echo set_value('county'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">City</label>
                                      <?php if (isset($validation)) { echo $validation->getError('city'); }?><br/>
                                      <input type="text" name="city" class="form-control" placeholder="City"
                                        value="<?php echo set_value('city'); ?>" >
                                  </div>

                              </div>
                              <div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">AddressLine1</label>
                                      <?php if (isset($validation)) { echo $validation->getError('addressLine1'); }?><br/>
                                      <input type="text" name="addressLine1" class="form-control" placeholder="AddressLine1"
                                        value="<?php echo set_value('addressLine1'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">AddressLine2</label>
                                      <?php if (isset($validation)) { echo $validation->getError('addressLine2'); }?><br/>
                                      <input type="text" name="addressLine2" class="form-control" placeholder="AddressLine2"
                                        value="<?php echo set_value('addressLine2'); ?>">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">AddressLine3</label>
                                      <?php if (isset($validation)) { echo $validation->getError('addressLine3'); }?><br/>
                                      <input type="text" name="addressLine3" class="form-control" placeholder="AddressLine3"
                                        value="<?php echo set_value('addressLine3'); ?>" >
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="password">Password</label>
                                      <?php if (isset($validation)) { echo $validation->getError('password'); }?><br/>
                                      <input type="text" name="password" class="form-control"  placeholder="Password"
                                      value="<?php echo set_value('password'); ?>">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="username">PhoneNumber</label>
                                      <?php if (isset($validation)) { echo $validation->getError('phone'); }?><br/>
                                      <input type="text" name="phone" class="form-control" placeholder="PhoneNumber"
                                      value="<?php echo set_value('phone'); ?>" >
                                  </div>
                                </div>
                              </div>
                                  <div class="form-group">
                                      <button type="submit" name="signup-btn" value="Sign Up" class="btn btn-block">
                                          Sign Up
                                      </button>

                                  </div>
                              </form>


                            <div class="modal-footer">
                           <?php echo anchor('Home/login/', ' SignIn Here'); ?>
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

</body>
</html>
