<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
header("content-type:text/html;charset=utf8");
//include("../include.php");

//取值
$username=$_POST["username"];
$identity=$_POST["identity"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];

//更新資料
$sql="UPDATE member SET mem_Name = '$username',mem_Email='$email',mem_Phone='$phone',mem_Gender='$gender' WHERE mem_Identity='$identity'";
$result = mysql_query($sql);
header("Location:member_update");



 ?>