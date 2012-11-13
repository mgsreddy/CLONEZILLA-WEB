<?php   
include "auth.php";
include "connect.php";


IF ($_GET['what']=='start') {
$image=trim($_POST['restore_name']);
$COUNT=trim($_POST['count']);
include "RESTORE_IMAGE.php";
}

IF ($_GET['what']=='stop') {
include "STOP_ALL.php";

}
?>

<meta http-equiv="refresh" content="0; URL=restore_image_page.php">