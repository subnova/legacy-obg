<?php

   Header("content-type: application/x-javascript");

    $botlist = array(   
                "Teoma",                   
                "alexa",
                "froogle",
                "inktomi",
                "looksmart",
                "URL_Spider_SQL",
                "Firefly",
                "NationalDirectory",
                "Ask Jeeves",
                "TECNOSEEK",
                "InfoSeek",
                "WebFindBot",
                "girafabot",
                "crawler",
                "www.galaxy.com",
                "Googlebot",
                "Scooter",
                "Slurp",
                "appie",
                "FAST",
                "WebBug",
                "Spade",
                "ZyBorg",
                "rabaz");

    foreach($botlist as $bot) {

      if(ereg($bot, $HTTP_SERVER_VARS['HTTP_USER_AGENT'])) {

          if($bot == "Googlebot") {
            if (substr($REMOTE_HOST, 0, 11) == "216.239.46.") $bot = "Googlebot Deep Crawl";
            elseif (substr($REMOTE_HOST, 0,7) == "64.68.8") $bot = "Google Freshbot";
	    else $bot = "Unknown Googlebot";
          }
          
          if ($QUERY_STRING != "") {
             $url = $HTTP_REFERER . "?" . $QUERY_STRING . "";
          } else {
             $url = $HTTP_REFERER . "";
          }

          $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
          
          // settings
          $to = "dwp@davix.co.uk";
          $subject = "Detected: $bot on $url";
          $body = "$bot was deteched on $url\n\n
          Date.............: " . date("F j, Y, g:i a") . "
          Page.............: " . $url . "
          Robot Name.......: " . $HTTP_USER_AGENT . "
          Robot Address....: " . $REMOTE_ADDR . "
          Robot Host.......: " . $hostname . "
          ";

          mail($to, $subject, $body);

          $myFile = "/etc/httpd/logs/robots.log";

          $fh = fopen($myFile, 'a') or die("can't open file");
  
          $accessdata = "$bot : " . date("F j, Y, g:i a") . " : " . $url . " : " . $HTTP_USER_AGENT . " : " . $hostname . " : " . $REMOTE_ADDR . "\n";
  
          fwrite($fh, $accessdata); 

          fclose($fh);
      }
    }
?>
