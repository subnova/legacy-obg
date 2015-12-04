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
      <div class="header">Winster Bed and Breakfast</div>
   </div>

   <div id="content">

     <?php include 'braecottage.php'; ?>

     <hr style="Width: 100%; Height: 8px;">

     <?php include 'avondalefarm.php'; ?> 

     <hr style="Width: 100%; Height: 8px;">
     
     <?php include 'oldshoulderofmutton.php'; ?>	
     
     <hr style="width: 100%; height: 8px;"> 

     If you run a B &B in Winster or surrounding area and would like a link to be added 
   to the Old Bowling Green website,  please e-mail the following information: 
   
     <ul style="font-size:10px" >  
       <li>The name of the B & B</li>
       <li>A photograph of the cottage / B & B </li>
       <li>A description of the cottage / B &B  - no more than 50 words</li>
       <li>The URL (e.g. http://www.peak-cottage.co.uk) of your website</li>
     </ul>
    
     to 
     <div Class="Imgleft"> 
       <img src="dwp_email.jpg" width="120" height="25"/>
     </div>
     <br>
   </div> 
 
   <?php include 'rpanel.php'; ?>
 
   <?php include 'bottommenu.php'; ?>

</div>

</body>
</html>
