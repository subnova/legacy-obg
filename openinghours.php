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
  
   <h2 class="opening-hours-heading">Festive Opening Hours 2015-16</h2>

   <span class="opening-hours-heading">December:</span>
   <dl class="festive-opening">
    <dt>24th</dt><dd>Bar &amp; Meals as usual</dd>
    <dt>25th</dt><dd>Just Bar from 12 noon to 2.30pm</dd>
    <dt>26th</dt><dd>Just Bar from 7.30pm<br/>Allan's Christmas Quiz from 9pm - all welcome</dd>
    <dt>27th</dt><dd>Just Bar from 12 noon</dt>
    <dt>28th</dt><dd>Closed</dd>
    <dt>29th</dt><dd>Closed</dd>
    <dt>30th</dt><dd>Just Bar from 7pm<br/>Shaun's Music Quiz from 8pm - all welcome</dd>
    <dt>31st</dt><dd>Just Bar from 7pm</dt>
   </dl>

   <span class="opening-hours-heading">January:</span>
   <dl class="festive-opening">
    <dt>1st</dt><dd>CLOSED ALL DAY</dd>
    <dt>2nd</dt><dd>Bar &amp; Meals as usual from now on!</dt>
   </dl>

   <h2 class="opening-hours-heading">Opening Hours 2016</h2>

   <span class="opening-hours-heading">Bar:</span>
   <dl class="opening-hours">
    <dt>Monday</dt><dd>Closed</dd>
    <dt>Tuesday</dt><dd>Closed</dd>
    <dt>Wednesday</dt><dd>6pm - 11pm</dd>
    <dt>Thursday</dt><dd>6pm - 11pm</dd>
    <dt>Friday</dt><dd>6pm - 11.45pm</dd>
    <dt>Saturday</dt><dd>6pm - 11.45pm</dd>
    <dt>Sunday</dt><dd>12 noon to 11pm</dd>
   </dl>

   <span class="opening-hours-heading">Kitchen:</span>
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
