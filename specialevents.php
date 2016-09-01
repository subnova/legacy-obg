<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  
  <?php include 'botdetect.php'; ?>
  <?php if ($robot) { include 'botmeta.php'; } else { include 'meta.php'; } ?> 
	      
  <link rel="stylesheet" type="text/css" href="obg.css" media="screen" title="Peak District Pub" />  

  <script type="text/javascript" src="bookmark.js"></script>

</head>

<body>

<?php if ($robot) { include 'botheader.php'; } else { include 'header.php'; } ?> 



<div id="wrap">

   <img style="width: 760px; height: 160px;" id="frontphoto" src="banner.jpg" alt="" />   
 
   <?php include 'lpanel.php'; ?>

   <div id="contenttitle"><div class="header">Special Events</div></div>

   <div id="content">

   <h1>Pub Quiz</h1>

   <h2 class="opening-hours-heading">Wednesday, 7th September at 9pm</h2>

   <p>We will be hosting a pub quiz in support of <i>Prostate Cancer UK</i>.
   Enter on the night: &pound;2 per person &ndash; up to 4 in a team.  There
   will be 2 categories of teams: "professional" and casual - so a chance for 
   everyone. Win a round of drinks.</p>

   <p>Raffle tickets, also in support of <i>Prostate Cancer UK</i>, are on sale
   at &pound;1 each.  Win &pound;50 to spend at the Old Bowling Green.
   Winner to be drawn on the night.</p>
   </div>  

   <?php include 'rpanel.php'; ?>
  
  <?php include 'bottommenu.php'; ?>
  
</div>

</body>
</html>
