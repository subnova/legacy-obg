<?php
  if (ereg('peakparkpub.com',$HTTP_SERVER_VARS['HTTP_REFERER'])) { echo "PEAKPARKPUB.COM"; include 'botheader_peaparkpub_com.php'; }
  
  elseif (ereg('peakparkpub.co.uk',$HTTP_SERVER_VARS['HTTP_REFERER'])) { echo "PEAKPARKPUB.CO.UK"; include 'botheader_peaparkpub_co_uk.php';}
?>