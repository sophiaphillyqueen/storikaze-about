<?php
require_once(dirname(__FILE__) . "/verif.php");

function oslink ( )
{
  //$balo = count($argo);
  //$tourl = $argo[0];
  //$texo = $argo[0];
  $abegin = true;
  foreach ( func_get_args() as $argo )
  {
    if ( $abegin ) { $tourl = $argo; }
    $texo = $argo;
    $abegin = false;
  }
  if ( $balo > 1.5 ) { $texo = $argo[1]; }
  echo "<a href = \"" . $tourl . "\" target = \"_blank\">" . htmlspecialchars($texo) . "</a>";
}

?>