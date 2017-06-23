<?php
header("content-type:text/html;charset=utf8");
session_start();
include("include.php");
date_default_timezone_set('Asia/Taipei');

//如果是會員就顯示
if(isset($_SESSION["identity"]))
{
	$id = $_SESSION["identity"];
	//rr_State = 0 代表取消的訂單
	$sql = "select * from room_record where rr_Member = '$id' and  rr_State = '0'";
	$result = mysqli_query($link,$sql);
	

	echo "<table border = '1'>";
	echo "<tr>";
	echo "<th>房號</th>";
	echo "<th>訂房時間</th>";
	echo "<th>入住日期</th>";
	echo "<th>退房日期</th>";

	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["rr_ID"];
		echo "</tr>";
		echo "<td>";
		echo $row["rr_RoomNumber"]."號房";
		echo "</td>";
		echo "<td>";
		echo $row["rr_DATE"];
		echo "</td>";
		echo "<td>";
		echo $row["rr_Checkin"];
		echo "</td>";
		echo "<td>";
		echo $row["rr_Checkout"];
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";

}
else
{
	echo "請先登入";
}
?>