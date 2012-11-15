<?
// Verbindung aufbauen, auswählen einer Datenbank
$link = mysql_connect("localhost", "root", "1234")
    or die("Keine Verbindung möglich: " . mysql_error());
 
// Datenbank auswählen
mysql_select_db("TTR") or die("Auswahl der Datenbank fehlgeschlagen\n");