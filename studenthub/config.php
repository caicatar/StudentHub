<?php
$conn = mysql_connect('localhost','root') or die("ERROR!");
mysql_select_db("studenthub", $conn) or die(mysql_error());
?>