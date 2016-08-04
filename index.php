 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <?php include 'botdetect.php'; ?>
  <?php if ($robot) { include 'botmeta.php'; } else { include 'meta.php'; } ?> 
	      
  <link rel="stylesheet" type="text/css" href="obg.css" media="screen" title="Peak District Pub" />  
  <link rel="stylesheet" type="text/css" href="reset.css" media="screen" />
  
  <script type="text/javascript" src="bookmark.js"></script>

</head>

<body>

<?php if ($robot) { include 'botheader.php'; } else { include 'header.php'; } ?> 

  
<div id="wrap">
   <img style="width: 760px; height: 160px;" id="frontphoto" src="banner.jpg" alt="" />   
   
   <?php include 'lpanel.php'; ?>

   <div id="contenttitle"><div class="header">Welcome to The Old Bowling Green</div></div>

   <div id="content" align="justify">
  
	 <div id="notice">
           Please note: the Old Bowling Green will be closing early, at 8pm, on the next two Sundays (7th and 14th of August) due to lack of staff (including a wedding!).  The kitchen will be also be closed on Sunday 28th August. Sorry for any inconvenience.
	 </div>

     <div class="img"> 
       <img style="border: 0px solid" src="DSC03274-rounded.JPG" width="370" height="278" alt="" title="" /> 
     </div>

     The <b>Old Bowling Green</b> is situated in the picturesque Derbyshire village of Winster, high in the hills of the Peak District National Park. 
     This charming old pub, which dates back to <i>1472</i>, is a privately owned traditional free house, offering good food, fine wines, and a range 
     of real ales.
  The resident owners, David and Marilyn Bentley, have been at the helm of  the "Green" since 1990 are pleased to extend a warm welcome 
     to you, whether you are dining or just popping in for a relaxing drink
   </div>  

   <div id="rpanel">  
      
      <div class="heading">CAMRA Pub of the Season - Spring 2009</div> 

      <div class="camra">
         <a href="awards.html"><img src="CAMRA_Pub_Of_The_Season_2009.jpg" width="140" height="120" alt="" title=""/> </a>
      </div>
      
      <?php include 'links.php'; ?>

   <div class="fb">
     <div class="fb-link">
      <a href="https://www.facebook.com/The-Old-Bowling-Green-187827484640461/?fref=ts" target="_top">
        <img src="facebook.jpeg" width="48" alt="facebook"/>
      </a>
     </div>
     <div class="fb-like" data-href="https://www.facebook.com/The-Old-Bowling-Green-187827484640461/?fref=ts" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
   </div>
  
   </div>

   <?php include 'bottommenu.php'; ?>

</div>

</body>
</html>
