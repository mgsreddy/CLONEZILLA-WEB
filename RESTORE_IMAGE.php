<?php

$image=trim($_POST['restore_name']);
$COUNT=trim($_POST['count']);
shell_exec("sudo drbl-ocs --debug=7 -b -g auto -e1 auto -e2 -x -r -j2 -p reboot --clients-to-wait ".$COUNT." -l en_US.UTF-8 startdisk multicast_restore ".$image." sda > restore.log");

?>
<meta http-equiv="refresh" content="0; URL=restore_image_page.php">