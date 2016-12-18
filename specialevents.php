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
 
   <h1>Christmas General Knowledge Quiz - December 26<sup>th</sup> at 9pm</h1>

   <p>Allan's Christmas Quiz returns on Boxing day.  Come join the fun and test
      your general knowledge whilst enjoying a few drinks and cozy fire.  Entry
      to the quiz is &pound;1 per person (with teams of up to four)
      with all proceeds going to charity.</p>

   <p>The Bar will be open from 7pm whilst the Kitchen will be closed.</p>

   <h1>Christmas Music Quiz - December 28<sup>th</sup> at 8pm</h1>

   <p>Shaun's Music Quiz will test your knowledge of all things musical, starting
      with the 50's and running through to the Music in this year's Christmas Adverts.
      As with Allan's Christmas Quiz, entry is &pound;1 per person with teams of 
      up to four and all the proceeds
      going to charity.</p>

   <p>The Bar will be open from 7pm whilst the Kitchen will be closed.</d>

   </div>  

   <?php include 'rpanel.php'; ?>
  
  <?php include 'bottommenu.php'; ?>
  
</div>

</body>
</html>
