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
  .modal-header {background:#D67B22;color:#fff;font-weight:800;}
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

<div class="fabrics1">
<body>

      <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->

      </div><!-- /.container-fluid -->

  <div id="top" >
      <div id="searchbox" class="container-fluid" style="width:112%;margin-left:-6%;margin-right:-6%;">
          <div>
              <form role="search" method="POST" action="Result.php">
                  <input type="text" class="form-control" name="keyword" style="width:80%;margin:20px 10% 20px 10%;" placeholder="Search for Products">
              </form>
          </div>
      </div>

      <div class="container-fluid" id="header">
          <div class="row">
              <div class="col-md-3 col-lg-3" id="category">
                  <div style="background:#D67B22;color:#fff;font-weight:800;border:none;padding:15px;"> Type of Fabrics </div>
                  <ul>





  <li>fabric_type_id</li>
      <li>Description</li>
      <li>Fabric Type Name</li>

      <tbody>
        <?php foreach ($fabric_types as $fabric_type) { ?>
            <tr>
                <td><?php echo $fabric_type['fabric_type_id']; ?></td>
                <td><?php echo $fabric_type['description']; ?></td>
                <td><?php echo $fabric_type['fabricTypeName']; ?></td>
            </tr>
        <?php } ?>
        </tbody>




                  </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                      <!-- Indicators -->


                        <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                          <div class="item active">

					<div class="img-responsive"> <a href="#"><img src="<?php echo $image_url."10.jpg"?>" alt="" /></a> </div>
                          </div>

                          <div class="item">
                            <div class="img-responsive"> <a href="#"><img src="<?php echo $image_url."11.jpg"?>" alt="" /></a> </div>
                          </div>

                          <div class="item">
                            <div class="img-responsive"> <a href="#"><img src="<?php echo $image_url."12.jpg"?>" alt="" /></a> </div>
                          </div>

                          <div class="item">
                           <div class="img-responsive"> <a href="#"><img src="<?php echo $image_url."13.png"?>" alt="" /></a> </div>
                          </div>

                          <div class="item">
                            <div class="img-responsive"> <a href="#"><img src="<?php echo $image_url."14.jpg"?>" alt="" /></a> </div>
                          </div>

						  <div class="item">
                            <div class="img-responsive"> <a href="#"><img src="<?php echo $image_url."13.png"?>" alt="" /></a> </div>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-lg-3" id="offer">
                  <a href="<?php echo $site_url."/Home/Product?value=Regional%20Books"?>"   <span></span>          <img class="img-responsive center-block" src="<?php echo $image_url."30.jpg"?>"></a>
                  <a href="<?php echo $site_url."/Home/Product?value=Health%20and%20Cooking"?>"  <span></span>       <img class="img-responsive center-block" src="<?php echo $image_url."40.jpg"?>"></a>
                  <a href="<?php echo $site_url."/Home/Product?value=Academic%20and%20Professional"?>"  <span></span> <img class="img-responsive center-block" src="<?php echo $image_url."50.jpg"?>"></a>
              </div>
          </div>
      </div>
  </div>

  <div class="container-fluid text-center" id="new">
      <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description?ID=NEW-1&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
				  <img class="book block-center img-responsive"  src="<?php echo $image_url."10.jpg"?> ">
                  <hr>
                  Cotton <br>
                  £ 113  &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 175 </span>
                  <span class="label label-warning">35%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description?ID=NEW-2&category=new">
              <div class="book-block">
                  <div class="tag">New</div>

                  <img class="block-center img-responsive" src="<?php echo $image_url."11.jpg"?>  ">
                  <hr>
                  Silk  <br>
                  £ 68 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 120 </span>
                  <span class="label label-warning">43%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description?ID=NEW-3&category=new">
              <div class="book-block">
                  <div class="tag">New</div>

                  <img class="block-center img-responsive" src="<?php echo $image_url."12.jpg"?>  ">
                  <hr>
                  Rayon <br>
                  £ 400 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 595 </span>
                  <span class="label label-warning">33%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description?ID=NEW-4&category=new">
              <div class="book-block">
                  <div class="tag">New</div>

                  <img class="block-center img-responsive" src="<?php echo $image_url."14.jpg"?>  ">
                  <hr>
                Poplin  <br>
                  £ 289 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 435 </span>
                  <span class="label label-warning">33%</span>
              </div>
            </a>
          </div>
      </div>
  </div>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" id="query_button" class="btn btn-lg" data-toggle="modal" data-target="#query">Ask query</button>
  <!-- Modal -->
  <div class="modal fade" id="query" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ask your query here</h4>
          </div>
          <div class="modal-body">
                    <form method="post" action="query.php" class="form" role="form">
                        <div class="form-group">
                             <label class="sr-only" for="name">Name</label>
                             <input type="text" class="form-control"  placeholder="Your Name" name="sender" required>
                        </div>
                        <div class="form-group">
                             <label class="sr-only" for="email">Email</label>
                             <input type="email" class="form-control" placeholder="abc@gmail.com" name="senderEmail" required>
                        </div>
                        <div class="form-group">
                             <label class="sr-only" for="query">Message</label>
                             <textarea class="form-control" rows="5" cols="30" name="message" placeholder="Your Query" required></textarea>
                        </div>
                        <div class="form-group">
                              <button type="submit" name="submit" value="query" class="btn btn-block">
                                                              Send Query
                               </button>
                        </div>
                    </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
          <script src="<?php echo $script_url.'bootstrap.min.js'?>"></script>
</body>
</div>








<!-- start of footer  -->
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
