<?php

//$filename = '/var/log/clonezilla/clonezilla-jobs.log';
//echo '<pre>';
//print_r(file_get_contents($filename));
//echo '</pre>';


//$dateihandle = fopen("/var/log/clonezilla/clonezilla-jobs.log","r");
//$zeile = fgets($dateihandle, 13);
//echo $zeile;
$myfile = '/var/log/clonezilla/clonezilla-jobs.log';
$command = "tac $myfile > /var/tmp/myfilereversed.txt";
passthru($command);
$ic = 0;
$ic_max = 100;  // stops after this number of rows
$handle = fopen("/var/tmp/myfilereversed.txt", "r");
while (!feof($handle) && ++$ic<=$ic_max) {
   $buffer = fgets($handle, 4096);
   echo $buffer."<br>";
}
fclose($handle);
?>