<h1>修改訂餐</h1>
<h2>您的訂餐紀錄:</h2>
<?php

if(isset($_GET["id"])){
	$rr_id=$_GET["id"];
}else{
		$rr_id=$_SESSION["rr_id"];
}
$find_od_record="SELECT *FROM order_record where rr_id=$rr_id";
$find_room_record="SELECT rr_RoomNumber FROM room_record where rr_id=$rr_id";
$result = mysql_query($find_od_record);
$result2 = mysql_query($find_room_record);
$row1 = mysql_fetch_assoc($result2);

echo "<table border=1>";
echo "<tr><th>房號</th>";
echo "<th>餐點名稱</th>";
echo "<th>單價</th>";
echo "<th>數量</th>";
echo "<th>送餐日期</th>";
echo "<th>送餐時間</th>";
echo "<th>修改</th>";
echo "<th>刪除</th></tr>";
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
	echo "<td><a href='update?id=".$row["or_ID"]."'>修改</a></td>";
	echo "<td><a href='del?id=".$row["or_ID"]."'>刪除</a></td>";
	echo "</tr>";
	$total_price=$total_price+($row["or_Quantity"]*$row2["d_price"]);
	$_SESSION["rr_id"]=$rr_id;
}
echo "</table>";
echo "您目前的訂餐總金額：$".$total_price;
echo "<form action='success'><input type='submit' value='確認修改'></form>";

