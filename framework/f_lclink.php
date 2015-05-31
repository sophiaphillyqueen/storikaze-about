<?php
require_once(dirname(__FILE__) . "/verif.php");

function lclink ( )
{
  $abegin = true;
  foreach ( func_get_args() as $argo )
  {
    if ( $abegin ) { $texo = $argo; }
    $tourl = $argo;
    $abegin = false;
  }
  echo "<a href = \"" . $tourl . "\">" . htmlspecialchars($texo) . "</a>";
}

?>