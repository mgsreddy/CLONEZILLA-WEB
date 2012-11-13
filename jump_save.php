<?php   
include "auth.php";

IF ($_GET['what']=='start') {
include "SAFE_IMAGE.php";

}

IF ($_GET['what']=='stop') {
include "STOP_ALL.php";

}
?>
<meta http-equiv="refresh" content="0; URL=save_image_page.php">

