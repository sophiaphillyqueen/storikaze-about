<?php
require_once(dirname(__FILE__) . "/verif.php");

function srkd_detect ( $thidir ) {
  if ( ! ( file_exists( $thidir . "/framework/main.php" ) ) ) { return false; }
  if ( ! ( file_exists( $thidir . "/framework/f_srkd_detect.php" ) ) ) { return false; }
  return true;
}

?>