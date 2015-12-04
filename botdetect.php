<?php

$robot=0;

$botlist = array("Teoma","alexa","froogle","inktomi","looksmart",
                 "URL_Spider_SQL","Firefly","NationalDirectory","Ask Jeeves",
                 "TECNOSEEK","InfoSeek","WebFindBot","girafabot",
                 "crawler","www.galaxy.com","Googlebot","Scooter",
                 "Slurp","appie","FAST","WebBug","Spade","ZyBorg","rabaz"
		 //,"Mozilla"
		);

    foreach($botlist as $bot) {
      
      if(ereg($bot, $HTTP_SERVER_VARS['HTTP_USER_AGENT'])) { $robot=1; break; }
    }
?>
