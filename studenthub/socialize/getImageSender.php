<?php
  $user = $_GET['usr'];
  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("studenthub");
  $sql = "SELECT image FROM userinfo WHERE username = $user";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>