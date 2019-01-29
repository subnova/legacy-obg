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
     <div class="header">Dining at The Old Bowling Green</div>
   </div>

   <div id="content" align="justify">
 
	 <div id="notice">
Sorry, the Kitchen will be closed from the 14th February to the 17th February inclusive.
	 </div>

      <div id="biggroups">
        Sorry, but we're unable to cater for large parties.
      </div>

      <?php include 'menu.html'; ?>
      
      <p><hr style="width: 100%; height: 8px;"> </p>
      <p> <big><b>Sunday Lunch </b></big></p>
     
      We offer a traditional roast lunch with all the trimmings, and a more casual menu too
      
    </div>

    <?php include 'rpanel.php'; ?>
  
    <?php include 'bottommenu.php'; ?>
 
</div>

</body>
</html>
