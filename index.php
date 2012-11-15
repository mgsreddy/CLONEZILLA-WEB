<!doctype html>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="./images/favicon.png" />
<link rel="stylesheet" type="text/css" href="./css/main_style.css" />
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/functions.js"></script>

<?php
		include('language.php'); 
		include('mysql.php');
		include('functions.php');
?>


<div id="doc">
<header id="header">
	<div id="languages">
<a href="?lang=en"><img src="images/en.png" alt="German flag" /></a>
<a href="?lang=de"><img src="images/de.png" alt="English flag"/></a>
	</div>
<h1><img src="./images/logo.png" alt="logo"></h1>

<nav><ul>
   <li class='active '><a href='index.php'><span><?php echo $lang['MENU_HOME']; ?></span></a></li>
   <li><a href='/save_image_page.php'><span><?php echo $lang['MENU_SAVE_IMAGE']; ?></span></a></li>
   <li><a href='/restore_image_page.php'><span><?php echo $lang['MENU_RESTORE_IMAGE']; ?></span></a></li>
   <li><a href='/setup.php'><span><?php echo $lang['MENU_SETUP']; ?></span></a></li>
 </ul></nav>

</header>
  <section id="content_index">
<article>


<?php
// Wenn kein AJAX, dann HTML Page ausgeben, sonst ajax actions ausführen
if(!IS_AJAX) {
	// KEIN AJAX Request
	// Erstellt die "normale" HTML Page

	// Daten aus Datenbank besorgen
	$query = "SELECT id, image_name, part, os, hw_type, date FROM `images` ORDER BY id ASC"; // Ausführen einer SQL-Anfrage
	$result = sql_query($query);

	$i = 0;
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$i++;
		
		// Alle Spalten
		foreach ($line as $key=>$col_value) {
			if($key=='timestamp') {
				$col_value = date('d.m.Y H:i', $col_value);
			}
			$data[$i][] = $col_value;
		}
		
		$data[$i][] = '<a class="delete_row" href="#"><img src="images/icon_del_light.png" alt="delete" /></a>'; // Aktions Links
	}
	$return = "<table class=\"table1\" width=\"100%\">\n";
	
	//Tabellen Kopf
	//$return .= "\t<tr>\n";
	$return .= "\t\t<th>ID</th>\n";
	$return .= "\t\t<th>Image Name</th>\n";
	$return .= "\t\t<th>Festplatte</th>\n";
	$return .= "\t\t<th>Betriebssystem</th>\n";
	$return .= "\t\t<th>Hardware</th>\n";
	$return .= "\t\t<th>Datum</th>\n";
	$return .= "\t\t<th>Aktion</th>\n";
	//$return .= "\t</tr>\n";
	///////
	
	//Tabellen Daten
	if(count($data)>0) {
		foreach($data as $line) 
		{
			$return .= MakeRow($line);
		}
	}
	$return .= "</table>\n";
	///////


	//HTML Template
$template = 
'<html>


	<body>
		
		'.$return.'
	</body>
</html>';

	echo $template; // Alles ausgeben
	///////	

} else {
	switch ($_POST['action']) {
 	case "delete_row":
			$query = "DELETE FROM `images` WHERE`id`=".saveColumn($_POST['id']); 
			echo $query;
			sql_query($query);
			break; 
	}
}

// Schließen der Verbinung
mysql_close($link);
?>
    </article>
</section>  
<footer>
    <a href="http://www.sinupedia.de">by skybot</a>
</footer>
</div>