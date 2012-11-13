<!doctype html>
<?php   include "auth.php";
        include 'mysql_connectinfo.php';
		include_once 'common.php'; 
        $ergebnis =mysql_query("SELECT* FROM images");
        $datensaetze = mysql_num_rows($ergebnis);
        while($row = mysql_fetch_array($ergebnis))
        $num=mysql_numrows($ergebnis);
        mysql_close();
		

?>

<link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="./css/main_style.css" />
<link href="./css/menu_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.fixheadertable.js"></script>
<link rel="stylesheet" type="text/css" href="./css/humanity/jquery-ui-1.9.1.custom.css" />


<div id="doc">
  <header id="header">
	<div id="languages">
<a href="?lang=en"><img src="images/en.png" /></a>
<a href="?lang=de"><img src="images/de.png" /></a>
</div>
    <h1>TAC TRAINING RECOVERY  <img src="./images/logo.png" width="30"> </h1>
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