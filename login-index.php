

<?php   include "auth.php";
        include 'mysql_connectinfo.php';
		include_once 'common.php'; 
        $ergebnis =mysql_query("SELECT* FROM images");
        $datensaetze = mysql_num_rows($ergebnis);
        while($row = mysql_fetch_array($ergebnis))
        $num=mysql_numrows($ergebnis);
        mysql_close();
		

?>

<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" type="text/css" href="./css/main_style.css" />
<link href="./css/menu_styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.fixheadertable.js"></script>
<link rel="stylesheet" type="text/css" href="./css/humanity/jquery-ui-1.9.1.custom.css" />


<div id="doc">
  <header id="header">
    <h1>TAC TRAINING RECOVERY</h1>
    <nav>
      <ul>
   <li class='active '><a href='#'><span>Home</span></a></li>
   <li><a href='/save_image_page.php'><span>Save Image</span></a></li>
   <li><a href='/restore_image_page.php'><span>Restore Image</span></a></li>
   <li><a href='/setup.php'><span>Setup</span></a></li>
      </ul>
    </nav>
  </header>
  <section id="content_index">
	<div id="languages">
<a href="index.php?lang=en"><img src="images/en.png" /></a>
<a href="index.php?lang=de"><img src="images/de.png" /></a>
<a href="index.php?lang=es"><img src="images/es.png" /></a>
</div>
    <article>
      <h2><?php echo $lang['HEADING']; ?></h2>

   






<script type="text/javascript">
    $(document).ready(function() {
        $('.fixme').fixheadertable({ 
    colratio       :[313, 313, 313], 
    height         : 400,
    width          : 940, 
    zebra          : true,
    resizeCol      : false,
    zebraClass : 'ui-state-active' // default
    
});
    });
</script>


  
<table class="fixme">
<thead>
        <tr>
            <th><b>Image Name</b></th>
            <th><b>Hardware</b></th>
            <th><b>Datum</b></th>
        </tr>
    </thead>


<?php
$i=0;
while ($i < $num) {

$f1=mysql_result($ergebnis,$i,"image_name");
$f3=mysql_result($ergebnis,$i,"hw_type");
$f4=mysql_result($ergebnis,$i,"date");
?>
<tbody>
<tr>
<td><?php echo $f1; ?></td>
<td><?php echo $f3; ?></td>
<td><?php echo $f4; ?></td>
</tr>
</tbody>
<?php
$i++;
}
?>
</table>

    </article>
</section>


  
  <footer>
    <a href="http://www.sinupedia.de">by skybot</a>
  </footer>
</div>