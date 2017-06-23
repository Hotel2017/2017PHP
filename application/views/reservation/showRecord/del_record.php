<?php
header("content-type:text/html;charset=utf8");
// session_start();
// include("include.php");
date_default_timezone_set('Asia/Taipei');

$getID = $_GET["id"];

$update = "update room_record set rr_State = '0' where rr_ID = '$getID'";
mysql_query($update);
mysql_close();

header("Location:show_record");

?>