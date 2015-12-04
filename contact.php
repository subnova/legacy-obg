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
   <div class="header">Getting in touch</div>
 </div>

 <div id="content">

    <div class="img"> <img src="telephone.jpg" width="162" height="145" alt="" title="" /> </div>
     
     <big>Old Bowling Green </big><p></p>
     East Bank, Winster<br> Derbyshire DE4 2DS
     <p> </p> Tel: <span style="font-weight: bold;">01629 650219 </span>
   </div>  

    <?php include 'rpanel.php'; ?>

    <?php include 'bottommenu.php'; ?>

</div>

</body>
</html>
