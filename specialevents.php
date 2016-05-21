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

   <h1>Carnival</h1>

   <p><a href="https://winsterwakes.wordpress.com/">Winster Wakes and Carnival</a> runs from Sunday the 26th June to Saturday 2nd July and The Old Bowling Green will be hosting several special events during the week.</p>

   <p><b>Tuesday, 28th June at 9pm</b> Allan's Carnival Quiz. Come along and join this fun general knowledge quiz - teams of up-to 4, &pound;2 per team.</p>

   <p><b>Thursday, 30th June at 6pm</b> BBQ.  Cheer home the brave souls who have run Winster Hill Race with a Burger or Hot Dog in hand.</p>
 
   <p><b>Thursday, 30th June at 9pm</b> Shaun's Music Quiz. Test your musical knowledge at Shaun's famous quiz. Expect questions on music found in recent adverts and the next lines (sing-along) round. Maximum of 4 per team, &pound;2 per team.</p>

   <h1>Secret Gardens</h1>

   <p><a href="http://www.winster.org/pages/secret-gardens-of-winster.htm">The Secret Gardens of Winster</a> will be on Saturday 16th July and Sunday 17th July. The Old Bowling Green will be open for drinks at lunch-time on Saturday 16th (and all evening) and open as normal on Sunday 17th.</p>

   </div>  

   <?php include 'rpanel.php'; ?>
  
  <?php include 'bottommenu.php'; ?>
  
</div>

</body>
</html>
