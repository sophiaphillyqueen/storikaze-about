<?php
require_once(dirname(__FILE__) . "/verif.php");

function srkd_code ( $codefile )
{
  $contena = file_get_contents($codefile . ".txt");
  echo "\n";
  echo "<table border = \"0\" cellpadding = \"4\"><tr><td>&nbsp;&nbsp;&nbsp;</td>";
  echo "<td bgcolor = \"#CCCCCC\">";
  echo "\n<pre>";
  echo htmlspecialchars($contena);
  echo "</pre></td></tr></table>\n";
}

?>