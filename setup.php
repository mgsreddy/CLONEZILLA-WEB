<!doctype html>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="./css/main_style.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">

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
   <li><a href='/restore_image_page.php'><span><?php echo $lang['MENU_RESTORE_IMAGE']; ?></span></a></li>
   <li class='active '><a href='/setup.php'><span><?php echo $lang['MENU_SETUP']; ?></span></a></li>
      </ul>
    </nav>
  </header>
  <section id="content_index">
    <article>
      <h2>Einstellungen:</h2>

   





  

    </article>
</section>


  
  <footer>
    <a href="http://www.sinupedia.de">by skybot</a>
  </footer>
</div>