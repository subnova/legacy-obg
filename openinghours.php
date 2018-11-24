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

   <div id="contenttitle"><div class="header">Opening Times</div> </div>

   <div id="content">

   <h2 class="opening-hours-heading">Opening Hours 2017</h2>

   <div id="notice">
   </div>

   <p></p>

   <span class="opening-hours-heading">Christmas 2018 &mdash; Opening Times</span>

   <p>(NB - Shorter "Bar Menu" is quicker for us to prepare and serve, and will be offered on the dates shown due to difficulty sourcing fresh produce or staff holidays.)</p>

   <dl class="opening-hours">
    <dt>Saturday 22<sup>nd</sup></dt><dd>Bar as usual; Shorter "Bar Menu"</dd>
    <dt>Sunday 23<sup>rd</sup></dt><dd>Bar as usual; Sunday lunch as usual</dd>
    <dt>Monday 24<sup>th</sup></dt><dd>Bar from 6pm; Kitchen closed</dd>
    <dt>Tuesday 25<sup>th</sup></dt><dd>Bar 12 noon &ndash; 2.30pm; Kitchen closed</dd>
    <dt>Wednesday 26<sup>th</sup></dt><dd>Bar from 7.30pm; Kitchen closed</dd>
    <div class="quiz">Allan's Christmas Quiz 8.30pm</div>
    <dt>Thursday 27<sup>th</sup></dt><dd>Normal hours. Bar from 6pm; shorter "Bar Menu" 6pm to 8.30pm</dd>
    <div class="quiz">Shaun's Music Quiz from 9pm-ish</div>
    <dt>Friday 28<sup>th</sup></dt><dd>Normal hours. Bar from 6pm; shorter "Bar Menu" 6pm to 8.30pm</dd>
    <dt>Saturday 29<sup>th</sup></dt><dd>Normal hours. Bar from 6pm; shorter "Bar Menu" 6pm to 8.30pm</dd>
    <dt>Sunday 30<sup>th</sup></dt><dd>Bar 12 noon to 8pm; Kitchen 12.15 to 2.30pm - shorter "Bar Menu" - sorry, no roast today!</dd>
    <dt>Monday 31<sup>st</sup></dt><dd>Bar from 7pm; Kitchen closed</dd>
    <dt>Tuesday 1<sup>st</sup></dt><dd>CLOSED</dd>
   </dl>

   <span class="opening-hours-heading">Normal opening hours for the Bar:</span>
   <dl class="opening-hours">
    <dt>Monday</dt><dd>Closed</dd>
    <dt>Tuesday</dt><dd>Closed</dd>
    <dt>Wednesday</dt><dd>6pm - 11pm</dd>
    <dt>Thursday</dt><dd>6pm - 11pm</dd>
    <dt>Friday</dt><dd>6pm - 11.45pm</dd>
    <dt>Saturday</dt><dd>6pm - 11.45pm</dd>
    <dt>Sunday</dt><dd>12 noon to 8pm</dd>
   </dl>

   <span class="opening-hours-heading">Normal opening hours for the Kitchen:</span>
   <dl class="opening-hours">
    <dt>Thursday to Saturday</dt><dd>6pm - 8.30pm</dd>
    <dt>Sunday</dt><dd>12.30pm - 2.30pm</dt>
   </dl>

   </div>  

   <?php include 'rpanel.php'; ?>
   
   <?php include 'bottommenu.php'; ?>

</div>

</body>
</html>
