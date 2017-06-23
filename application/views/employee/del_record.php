<?php
header("content-type:text/html;charset=utf8");
//include("include.php");
date_default_timezone_set('Asia/Taipei');

$getID = $_GET["id"];


$update = "update room_record set rr_State = '0' where rr_OrderNumber = '$getID'";
mysql_query($update);
mysql_close();

header("Location:view_record");

?>