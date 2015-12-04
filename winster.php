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

   <div id="contenttitle"> <div class="header">Winster Old Village</div> </div>

   <div id="content" align="justify">

    <div class="img"> <img src="mainstreet.jpg" border=1;width="177" height="120" alt="" title="" /> </div>

      Winster old village is mainly Grade II listed and exudes charm and charachter. It is located
      about 4 miles west of Matlock and 6 miles south of Bakewell in the beautiful Peak District
      National park.

      There is excellent walking in the countryside around Winster, with B&Bs and holiday cottage
      accomodation available in the village (although not, we regret, at the Old Bowling Green itself.
      <p></p><br>
					     		     
      <object width="395" height="314"><param name="movie" value="http://www.youtube.com/v/zmKp_GYf7yA&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/zmKp_GYf7yA&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="395" height="314"></embed></object>


      <div class="imgleft"> <img src="winster1.jpg" border=1 width="110" height="80" alt="Winster Derbyshire" title="Winster" /> </div> 
      <div class="imgleft"> <img src="winster2.jpg" border=1 width="110" height="80" alt="Winster Derbyshire" title="Winster" /> </div> 
      <div class="imgleft"> <img src="winster3.jpg" border=1 width="110" height="80" alt="Winster Derbyshire" title="Winster" /> </div>  
      <p></p> For more photos of Winster click here -><a href="http://www.stoneheath-cottage.co.uk/winster.php">Peak district cotttages</a>

      <p></p> For a satellite image of Winster click <a href="http://maps.google.co.uk/maps?f=q&hl=en&q=Derby,+DE4+2DS&ie=UTF8&ll=53.14085,-1.640847&spn=0.003926,0.008465&t=k&z=17&om=1">here</a> 

    </div>  

    <?php include 'rpanel.php'; ?>
      
    <?php include 'bottommenu.php'; ?>

</div>

</body>
</html>
