<?php
  if (ereg('peakparkpub.com',$HTTP_SERVER_VARS['HTTP_REFERER'])) { include 'botmeta_peaparkpub_com.php'; }
  
  elseif (ereg('peakparkpub.co.uk',$HTTP_SERVER_VARS['HTTP_REFERER'])) { include 'botmeta_peaparkpub_co_uk.php';}

  else { include 'meta.php'; }
?>