<?
require_once(dirname(__FILE__) . "/verif.php");

function srkd_updir ( $sorco, $mounto ) {
  $curpth = realpath($sorco);
  $remain = $mounto;
  while ( $remain > 0.5 )
  {
    $curpth = dirname($curpth);
    $remain = ((int)($remain - 0.8));
  }
  return $curpth;
}

?>