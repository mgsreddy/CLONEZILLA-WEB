<?php
   $mysqlhost="localhost";
   $mysqluser="root";
   $mysqlpasswd="1234";
   $mysqldbname="TTR";
   $link = @mysql_pconnect($mysqlhost, $mysqluser, $mysqlpasswd);
   if ($link == FALSE) {
     echo "<p><b>Leider kann keine Verbindung zur Datenbank hergestellt werden.";
     echo "Bitte versuchen Sie es später noch einmal.</b></p>\n";
     exit();
   }
mysql_select_db("$mysqldbname");
?>