<?php
require_once(dirname(__FILE__) . "/verif.php");

function srkd_header ( )
{
  $ourtitle = $GLOBALS["original_page_info"]["pgtitle"];
  
  echo "<html>\n";
  echo "<head>\n";
  echo "<title>Storikaze: " . $ourtitle . "</title>\n";
  echo "</head>\n";
  echo "<body>\n";
  echo "<h1>" . $ourtitle . "</h1>\n";
}

?>