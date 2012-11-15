<!doctype html>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="./css/main_style.css" />
<script src="./js/refresh_activity.js"></script>
<script src="./js/get_image_info.js"></script>

<?php
		include('language.php'); 
		include('mysql.php');
		include('functions.php');
?>

<div id="doc">
	<header id="header">
	<div id="languages">
		<a href="?lang=en"><img src="images/en.png" /></a>
		<a href="?lang=de"><img src="images/de.png" /></a>
	</div>
    	<h1><img src="./images/logo.png" alt="logo"></h1>
    	<nav>
      		<ul>
   				<li><a href='index.php'><span><?php echo $lang['MENU_HOME']; ?></span></a></li>
   				<li><a href='/save_image_page.php'><span><?php echo $lang['MENU_SAVE_IMAGE']; ?></span></a></li>
   				<li class='active '><a href='/restore_image_page.php'><span><?php echo $lang['MENU_RESTORE_IMAGE']; ?></span></a></li>
   				<li><a href='/setup.php'><span><?php echo $lang['MENU_SETUP']; ?></span></a></li>
			</ul>
    	</nav>
	</header>
  	<section id="content">
    	<article>
      		<h2><?php echo $lang['RESTORE_H1']; ?></h2>
<?php
$ergebnis =mysql_query("SELECT image_name FROM images");
?>

	<form id="restoreform" class="rounded" method="post" action="jump_restore.php">
		<div id="restore_form_left"> 
		<div class="styled-select">					
			<label for="restore_name"><?php echo $lang['RESTORE_FORM_IMAGE_NAME']; ?></label>		
        	<select name="restore_name" onchange="showUser(this.value)">
		</div>
<?php
while($row=mysql_fetch_array($ergebnis))
{
?>
		<option value="<?php echo $row['image_name'];?>">
<?php 
echo $row['image_name'];
?>
	    </option>
	    <?php
		 }
	    ?>
		</select>

<div class="styled-select">
	<label for="count"><?php echo $lang['RESTORE_FORM_IMAGE_COUNT']; ?></label> <!-- Abfrage nach Anzahl -->
						<select class="select" name="count" id="count">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						</select>
</div>
<input type="button"  class="button" value="<?php echo $lang['RESTORE_FORM_BUTTON_START']; ?>" onclick="myFrm = document.getElementById('restoreform'); myFrm.action='jump_restore.php?what=start'; myFrm.submit();" />
<input type="button"  class="button" value="<?php echo $lang['RESTORE_FORM_BUTTON_STOP']; ?>" onclick="myFrm = document.getElementById('restoreform');myFrm.action='jump_restore.php?what=stop'; myFrm.submit();" />
</div>
</div>
<div id="txtHint"></div>
    </article>
  </section>
  





<aside>
    <h2><?php echo $lang['RESTORE_AKTIVE']; ?></h2>

<section id="activitybox">
<div id="ReloadThis"></div>
</section>



  </aside>
  <footer>
    <a href="http://www.sinupedia.de">by skybot</a>
  </footer>
</div>


