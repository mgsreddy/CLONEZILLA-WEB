<?php
include "connect.php";

$image_name1 = htmlentities($_POST["image_name"]);
$image_name = str_replace(" ","_",$image_name1);
$part = htmlentities($_POST["part"]);
$os = htmlentities($_POST["os"]);
$hw_type = htmlentities($_POST["hw_type"]);
$date = date("Y-m-d H:i:s");
$description = htmlentities($_POST["image_description"]);
$eintrag = "INSERT INTO images (image_name, part, os, hw_type, date, description) VALUES ('$image_name', '$part', '$os', '$hw_type', '$date', '$description')"; 
$eintragen = mysql_query($eintrag);
mysql_close();
shell_exec("sudo drbl-ocs --debug=7 -b -q2 -j2 -fsck-src-part-y -p reboot -z1p -i 1000000 -l en_US.UTF-8 startdisk save $image_name sda > save.log");
?>
