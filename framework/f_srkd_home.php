<?php
require_once(dirname(__FILE__) . "/verif.php");

function srkd_home ( ) {
  if ( srkd_detect('.') ) { return '.'; }
  $tamra = "..";
  $tamrb = 30;
  while ( $tamrb > 0.5 )
  {
    if ( srkd_detect($tamra) ) { return $tamra; }
    $tamra .= "/..";
    $tamrb = ((int)($tamrb - 0.8));
  }
  return false;
}

?>