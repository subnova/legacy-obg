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

   <div id="contenttitle"> <div class="header">Beers, Wines and Spirits</div></div>

   <div id="content"align="justify">

    <div class="img"> <img src="drinks.jpg" width="177" height="130" alt="" title="" /> </div>
       <p><b><big>Local Cask Ales</big></b></p>

       A range of cask-ales from the immediate  area is offered - from micro-breweries a maximum of 25 miles from our pub. These include 

       <a href="http://www.abbeydalebrewery.co.uk" rel="nofollow"> Abbeydale Brewery</a>, 
       <a href="http://www.peakales.co.uk" rel="nofollow"> Peak Ales</a>, 
       <a href="http://www.bramptonbrewery.co.uk" rel="nofollow"> Brampton Brewery</a>,
       <a href="http://www.bradfieldbrewery.co.uk" rel="nofollow"> Bradfield Brewery</a>
       <a href="http://www.barlowbrewery.co.uk" rel="nofollow"> Barlow Brewery</a>

	- all of whom regularly feature on our bar. 

	<p> </p> 
     
	<p><p></p></p>

       <p><hr style="width: 100%; height: 8px;"> </p>
       <p><b><big>Wines and Malt Whiskies</big></b></p>
      <p></p>In  addition to draught Ales, Wines are available by the glass or by the bottle; all at sensible prices -
       even the Gevrey Chambertins and Cloudy Bays are affordable.

       <p>A huge selection of Malt Whiskies from Scotland and Ireland dominate the
       back bar, with a wide range of liquers also available.</p>

         <p></p> <hr style="width: 100%; height: 8px;">

	<p><b><big>2007 Special Pub of the year award</big></b></p> 
      	<div class="imgleft"> <img src="http://www.chesterfieldcamra.org.uk/images/awards/winster-award-2007.jpg" height="100" alt="" title="Special pub of the year" /> </div>

	<p>We are extremely pleased to have received a CAMRA <b>"Special Pub of the year"</b> award for 2007. To find out more about this award, please click on the link below:</p>

	<p><a href="http://www.chesterfieldcamra.org.uk/awards/2007%20-%20special.html"> Bowled over - Special Campaigning Pub of 2007</a></p>

          <p></p> <hr style="width: 100%; height: 8px;">

    </div>  

    <?php include 'rpanel.php'; ?>

    <?php include 'bottommenu.php'; ?>
 
</div>

</body>
</html>
