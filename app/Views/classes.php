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
</div>
</body>


<?php
function build_calendar($month, $year) {
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date)=?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['date'];
            }
            $stmt->close();
        }
    }
    // Create array containing abbreviations of days of week.
    $daysOfWeek = array('Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    // How many days does this month contain?
    $numberDays = date('t',$firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    // Create the table tag opener and day headers

    $datetoday = date('Y-m-d');
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";

    $calendar.= " <a href='index.php' class='btn btn-xs btn-primary' data-month='".date('m')."' data-year='".date('Y')."'>Current Month</a> ";

    $calendar.= "<a href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."' class='btn btn-xs btn-primary'>Next Month</a></center><br>";

    $calendar .= "<tr>";

    // Create the calendar headers
    foreach($daysOfWeek as $day) {
        $calendar .= "<th  class='header'>$day</th>";
    }

    // Create the rest of the calendar
    // Initiate the day counter, starting with the 1st.
    $currentDay = 1;
    $calendar .= "</tr><tr>";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.

    if($dayOfWeek > 0) {
        for($k=0;$k<$dayOfWeek;$k++){
            $calendar .= "<td  class='empty'></td>";
        }
    }


    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {
         //Seventh column (Saturday) reached. Start a new row.
         if ($dayOfWeek == 7) {
             $dayOfWeek = 0;
             $calendar .= "</tr><tr>";
         }

         $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
         $date = "$year-$month-$currentDayRel";
         $dayname = strtolower(date('l', strtotime($date)));
         $eventNum = 0;
         $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
         }elseif(in_array($date, $bookings)){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
         }else{
           // $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='/Home/book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";

	 $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book?date=".$date."' class='btn btn-success btn-xs'>Book</a>";

         }

         $calendar .="</td>";
         //Increment counters
         $currentDay++;
         $dayOfWeek++;
     }

     //Complete the row of the last week in month, if necessary
     if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for($l=0;$l<$remainingDays;$l++){
            $calendar .= "<td class='empty'></td>";
        }
     }

    $calendar .= "</tr>";
    $calendar .= "</table>";
    return $calendar;
}

?>

<html>
<head>
<meta name="viewport"content="width=device-width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcd.com/boostrap/3.4.0/css/boostrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $css_url."book_css.css"?>" />

<style>
	table{
		table-layout:fixed;
	}
	td{
		width:33%;
	}
	.today{
		background: yellow;
	}
</style>
</head>
<bod
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div id="calendar">
     <?php
      $dateComponents = getdate();
      $month = $dateComponents['mon'];
      $year = $dateComponents['year'];
      echo build_calendar($month,$year);
     ?>
    </div>
   </div>
  </div>
 </div>
</body>

</html>
















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
</body>
