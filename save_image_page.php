<!doctype html>
<meta charset="utf-8">
<?php   include "auth.php";
		include "mysql_connectinfo.php";
		include_once 'common.php'; 
?>

<link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="./css/main_style.css" />
<link href="./css/menu_styles.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="./css/humanity/jquery-ui-1.9.1.custom.css" />

<!-- Das ist neu -->
<script type="text/javascript">
function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}

xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('ReloadThis').innerHTML=xmlHttp.responseText;
		setTimeout('Ajax()',1000);
	}
}
xmlHttp.open("GET","getLog.php",true);
xmlHttp.send(null);
}

window.onload=function(){
	setTimeout('Ajax()',1000);
}



    $(function() {
        $( document ).tooltip({
            position: {
                my: "center bottom-20",
                at: "center top",
                using: function( position, feedback ) {
                    $( this ).css( position );
                    $( "<div>" )
                        .addClass( "arrow" )
                        .addClass( feedback.vertical )
                        .addClass( feedback.horizontal )
                        .appendTo( this );
                }
            }
        });
    });

</script>
<!-- Das ist neu -->




<div id="doc">
  <header id="header">
	<div id="languages">
<a href="?lang=en"><img src="images/en.png" /></a>
<a href="?lang=de"><img src="images/de.png" /></a>
</div>
    <h1>TAC TRAINING RECOVERY <img src="./images/logo.png" width="30"> </h1>
    <nav>
            <ul>
   <li><a href='index.php'><span><?php echo $lang['MENU_HOME']; ?></span></a></li>
   <li class='active '><a href='/save_image_page.php'><span><?php echo $lang['MENU_SAVE_IMAGE']; ?></span></a></li>
   <li><a href='/restore_image_page.php'><span><?php echo $lang['MENU_RESTORE_IMAGE']; ?></span></a></li>
   <li><a href='/setup.php'><span><?php echo $lang['MENU_SETUP']; ?></span></a></li>
      </ul>    </nav>
  </header>
<section id="content">
    <article>
      <h2><?php echo $lang['SAVE_H1']; ?></h2>
      <p>



<form id="saveform" class="rounded" method="post" action="jump_save.php">
<div id="safe_form_left"> 
	<div class="field">
    	<label for="image_name"><?php echo $lang['SAVE_FORM_IMAGE_NAME']; ?></label>
		<input type="text" class="input" name="image_name" id="image_name" autofocus="autofocus"; />
	</div>

	<div class="styled-select">
		<label for="part"><?php echo $lang['SAVE_FORM_HARDDRIVE']; ?></label> <!-- Abfrage nach Festplatte sda/sdb -->
			<select class="select" name="part" id="part">
				<option value="sda"><?php echo $lang['SAVE_FORM_HARDDRIVE_1']; ?></option>
				<option value="sdb"><?php echo $lang['SAVE_FORM_HARDDRIVE_2']; ?></option>
			</select>
	</div>
	<div class="styled-select">
		<label for="os"><?php echo $lang['SAVE_FORM_OS']; ?></label> <!-- Abfrage nach Betriebssystem -->
			<select class="select" name="os" id="os">
				<option value="WINDOWS_XP">Windows XP</option>
				<option value="WINDOWS_7">Windows 7</option>
				<option value="LINUX">Linux</option>
			</select>
	</div>
	<div class="field">
    	<label for="hw_type"><?php echo $lang['SAVE_FORM_HARDWARE']; ?></label> <!-- Abfrage nach Hardware -->
		<input type="text" class="input" name="hw_type" id="hw_type" placeholder="" />
						
	</div>

		<input type="button"  class="button" value="<?php echo $lang['SAVE_FORM_BUTTON_START']; ?>" onclick="myFrm = document.getElementById('saveform'); myFrm.action='jump_save.php?what=start'; myFrm.submit();" />
		<input type="button"  class="button" value="<?php echo $lang['SAVE_FORM_BUTTON_STOP']; ?>" onclick="myFrm = document.getElementById('saveform');myFrm.action='jump_save.php?what=stop'; myFrm.submit();" />
</div>
<div id="safe_form_right"> 
<label class='right' for="image_description"><?php echo $lang['SAVE_FORM_IMAGE_DESCRIPTION']; ?></label>
<textarea class="textarea"placeholder="Describe the image with some words..." id="image_description" name="image_description"></textarea>
</div>	


</form>








</p>
    </article>
  </section>
  <aside>
    <h2><?php echo $lang['SAVE_AKTIVE']; ?></h2>
    <p>
<section id="activitybox">
<div id="ReloadThis"></div>
</section>




</p>
  </aside>
  <footer>
    <a href="http://www.sinupedia.de">by skybot</a>
  </footer>
</div>			
