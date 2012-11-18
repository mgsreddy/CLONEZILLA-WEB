<?php
include('language.php'); 
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '1234');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("TTR", $con);

$sql="SELECT * FROM images WHERE image_name  = '".$q."'";

$result = mysql_query($sql);





echo "<table class='fixed'>";

echo "<tr>";
echo $lang['INDEX_TABLE_IMAGE_NAME'];
echo $lang['INDEX_TABLE_HARDDISK'];
echo $lang['INDEX_TABLE_OS'];
echo $lang['INDEX_TABLE_HARDWARE'];
echo $lang['INDEX_TABLE_DATE'];
echo "</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['image_name'] . "</td>";
  echo "<td>" . $row['part'] . "</td>";
  echo "<td>" . $row['os'] . "</td>";
  echo "<td>" . $row['hw_type'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


mysql_close($con);
?>