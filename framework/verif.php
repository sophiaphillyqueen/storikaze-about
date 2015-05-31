<?php
require_once(dirname(__FILE__) . "/verif.php");

if ( ! is_array($original_page_info) )
{
  echo "<html><body><h1>NOT A VALID ENTRY POINT</h1></body></html>\n";
  exit(0);
}

?>