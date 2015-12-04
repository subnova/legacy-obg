<?php

   Header("content-type: application/x-javascript");

   if ($QUERY_STRING != "") {
      $url = $HTTP_REFERER . "?" . $QUERY_STRING . "";
   } else {
      $url = $HTTP_REFERER . "";
   }
   
   $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
   
   //$to = "dwp@davix.co.uk";
   //$subject = "Detected access on $url";
   //$body = "Detected access on $url\n\n
   //Date.............: " . date("F j, Y, g:i a") . "
   //Page.............: " . $url . "
   //Agent............: " . $HTTP_USER_AGENT . "
   //Host Name........: " . $hostname . "
   //Host Address.....: " . $REMOTE_ADDR . "
         ";

   //mail($to, $subject, $body);

   $myFile = "/etc/httpd/logs/access.log";

   $fh = fopen($myFile, 'a') or die("can't open file");
  
   $accessdata = "$REMOTE_ADDR : " . date("F j, Y, g:i a") . " : " . $url . " : " . $HTTP_USER_AGENT . " : " . $hostname . "\n";
  
   fwrite($fh, $accessdata); 

   fclose($fh);
?>
