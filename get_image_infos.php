<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '1234');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("TTR", $con);

$sql="SELECT * FROM images WHERE image_name  = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>

<style>
table, th, td {
border:1px solid #CCCCCC;

font-family: Verdana;
font-size: 1em;
text-align: center;
padding: 5px;
}
th {
background-color: #F6E4CC;
color: #333333;
border:1px solid #CCCCCC;
}
</style>



<tr>
<th>Image Name</th>
<th>Festplatte</th>
<th>Operating System</th>
<th>Hardware</th>
<th>Date</th>
</tr>";

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