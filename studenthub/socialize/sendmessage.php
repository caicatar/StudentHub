<?php
include('../config.php');
$userid = $_GET['userid'];
$receiver= $_GET['username'];
$message = $_POST['msg'];
$username = $_POST['username'];
$sql = ("INSERT INTO `conversation`(`message_content`,`senderid`,`username`,`receiver_username`) values ('$message','$userid','$username','$receiver')");
$result=mysql_query($sql) or die(mysql_error());
if($result)
{
header("location:user_conversation.php?userid=$userid");
}
?>