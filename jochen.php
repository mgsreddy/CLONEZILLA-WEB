<?php

echo "\n-------\nAusgabe von ps='".myExec( "ps -ef|grep ocsmgrd" )."'\n-------\n";
echo "\nTest ob ocs läuft:\n\n  ".( ocsIsRunning() ? "Läuft": "Nö" )."\n-------\n";




function ocsIsRunning(){
  return strpos( myExec( "ps -ef|grep ocsmgrd" ), "/usr/sbin/ocsmgrd" ) !== false;
}

function myExec( $cmd ){
  $res = Array(); $ret = 0;
  exec( $cmd, $res, $ret );
  return join( "\n", $res );
}

?>
