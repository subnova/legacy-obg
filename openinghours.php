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

   <h2 class="opening-hours-heading">Opening Hours 2016</h2>

   <div id="notice">
   </div>

   <p></p>

   <span class="opening-hours-heading">Christmas:</span>
   <dl class="opening-hours">
    <dt>December 24<sup>th</sup></dt><dd>Bar only, from 6pm</dd>
    <dt>December 25<sup>th</sup></dt><dd>Bar only, from 12noon &ndash; 2.30pm</dd>
    <dt>December 26<sup>th</sup></dt><dd>Bar only, from 7pm &ndash; then Allan's Music Quiz from 9pm</dd>
    <dt>December 27<sup>th</sup></dt><dd><i>Closed</i></dd>
    <dt>December 28<sup>th</sup></dt><dd>Bar only, from 7pm &ndash; then Shaun's Music Quiz from 8pm</dd>
    <dt>December 29<sup>th</sup></dt><dd>Bar &amp; Meals from 6pm</dd>
    <dt>December 30<sup>th</sup></dt><dd>Bar &amp; Meals from 6pm</dd>
    <dt>December 31<sup>st</sup></dt><dd>Bar only, from 7pm</dd>
    <dt>January 1<sup>st</sup></dt><dd><i>Closed</i></dd>
    <dt>January 2<sup>nd</sup></dt><dd><i>Closed</i></dd>
   </dl>


   <span class="opening-hours-heading">Normal Opening Hours for the Bar:</span>
   <dl class="opening-hours">
    <dt>Monday</dt><dd>Closed</dd>
    <dt>Tuesday</dt><dd>Closed</dd>
    <dt>Wednesday</dt><dd>6pm - 11pm</dd>
    <dt>Thursday</dt><dd>6pm - 11pm</dd>
    <dt>Friday</dt><dd>6pm - 11.45pm</dd>
    <dt>Saturday</dt><dd>6pm - 11.45pm</dd>
    <dt>Sunday</dt><dd>12 noon to 11pm</dd>
   </dl>

   <span class="opening-hours-heading">Normal Opening Hourse for the Kitchen:</span>
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
