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
   <ul>
     <li><b>Monday 25th June</b> -  Bar open from 6pm for Cycle Race up East Bank</li>
     <li><b>Tuesday 26th June</b> - Bar open from 7.30pm for Allan's Charity Quiz @ 9pm</li>
     <li><b>Thursday 28th June</b> - Barbeque outside at 6.30pm &amp; Shaun's Music Quiz @ 9pm</li>
   </ul>
   </div>  

   <?php include 'rpanel.php'; ?>
  
  <?php include 'bottommenu.php'; ?>
  
</div>

</body>
</html>
