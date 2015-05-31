<?php
require_once(dirname(__FILE__) . "/verif.php");

function hllink ( )
{
  $abegin = true;
  $detecto = srkd_home();
  foreach ( func_get_args() as $argo )
  {
    if ( $abegin )
    {
      $texo = $argo;
      $tourl = $detecto;
    }
    if ( ! $abegin )
    {
      $tourl = $detecto . "/" . $argo;
    }
    $abegin = false;
  }
  echo "<a href = \"" . $tourl . "\">" . htmlspecialchars($texo) . "</a>";
}

?>