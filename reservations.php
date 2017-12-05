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

<div id="contenttitle">
   <div class="header">Making a table reservation</div>
</div>

 <div id="content">

        <div id="notice">
         </div>

    <div class="img"> 
       <img src="reservations.jpg" width="197" height="140" alt="" title="" /> </div>
       Table reservations are recommended for Friday and Saturday evenings and during busy periods. 
       Parties including children are advised to book as facilities for Children are limited.
       Well behaved children are welcome to dine until 8 p.m (a children's menu is available until 7:30 p.m.)
       We regret that we do not have facilities for babies.
       <p></p> 
       For Table reservations, please ring David or Marilyn Bentley on <big>01629 650219</big> or e-mail us at
       <a href="mailto:peakparkpub@gmail.com">peakparkpub@gmail.com</a>.  Please ring when making
       reservations for the same day as e-mail is not constantly monitored.
    </div>  

    <?php include 'rpanel.php'; ?>

    <?php include 'bottommenu.php'; ?>

</div>

</body>
</html>
