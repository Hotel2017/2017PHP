<h1>您已成功訂餐</h1>
<h2>您的訂餐紀錄:</h2>
<?php
function alert_msg($msg,$redirect){ 
	    echo "<SCRIPT Language=javascript>"; 
	    echo "window.alert('".$msg."')"; 
	    echo "</SCRIPT>"; 
	    echo "<script language=\"javascript\">"; 
	    echo "location.href='".$redirect."'"; 
	    echo "</script>"; 
	    return; 
	}

if(isset($_GET["id"])){
	$rr_id=$_GET["id"];
}else{
		$rr_id=$_SESSION["rr_id"];
}
$find_od_record="SELECT *FROM order_record where rr_id=$rr_id";
$find_room_record="SELECT * FROM room_record where rr_id=$rr_id";
$result = mysql_query($find_od_record);
$result2 = mysql_query($find_room_record);
$row1 = mysql_fetch_assoc($result2);

$today=date("Y-m-d");
$checkin_date=$row1["rr_Checkin"];
$checkout_date=$row1["rr_Checkout"];
if($today>=$checkin_date && $today<=$checkout_date){

echo "<table border=1>";
echo "<tr><th>房號</th>";
echo "<th>餐點名稱</th>";
echo "<th>單價</th>";
echo "<th>數量</th>";
echo "<th>送餐日期</th>";
echo "<th>送餐時間</th></tr>";
$total_price=0;
while($row = mysql_fetch_assoc($result))
{
	//echo $row['rr_ID'];
	$d_ID=$row["d_ID"];
	$find_dish_name="SELECT d_name,d_price FROM dish where d_ID=$d_ID";
	$result3 = mysql_query($find_dish_name);
	$row2 = mysql_fetch_assoc($result3);
	
	echo "<tr>";
	echo "<td>".$row1["rr_RoomNumber"]."</td>";
	echo "<td>".$row2["d_name"]."</td>";
	echo "<td>".$row2["d_price"]."</td>";
	echo "<td>".$row["or_Quantity"]."</td>";
	echo "<td>".$row["or_Date"]."</td>";
	echo "<td>".$row["or_Time"]."</td>";
	echo "</tr>";
	$total_price=$total_price+($row["or_Quantity"]*$row2["d_price"]);
}
echo "</table>";
echo "您目前的訂餐總金額：".$total_price;
echo "<form action='http://140.127.218.151/order_dish'><input type='submit' value='確認訂餐'><a href ='modify?id=".$rr_id."'>修改訂餐</a></form>";
}
else{
	$msg="今天還不能訂餐喔~所以你也沒有資料可以查詢~";
	$redirect="http://140.127.218.151/order_dish";
	alert_msg($msg,$redirect);
}
?>