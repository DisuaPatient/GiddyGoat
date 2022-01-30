<?php

$site_url = base_url();
$local_style = $site_url."/assets/";
$image_url = $site_url."/assets/images/";
$css_url = $site_url."/assets/stylesheet/";
$script_url = $site_url."/assets/scripts/";
?>

<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];

    }

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
            $stmt = $mysqli->prepare("INSERT INTO bookings (name,email, date) VALUES (?,?,?)");
            $stmt->bind_param('sss', $name, $email, $date);
            $stmt->execute();
            $msg = "<div class='alert alert-success'>Booking Successfull</div>";

            $stmt->close();
            $mysqli->close();


}



?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
  </head>

  <body>
   <div class="container">

       <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
       <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <?php echo(isset($msg))?$msg:""; ?>
              <p><?php echo anchor('Home/classes/', 'Back to Home Menu'); ?></p>
              <form action="" method="post">
                  <div class="form-group">
                      <label for="">Name</label>
                      <input required type="text" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                      <label for="">Email</label>
                      <input required type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      <?php echo anchor('Home/register/', 'Not a member SignUp'); ?>
                  </div>
              </form>
          </div>

       </div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>
  </body>

</html>
