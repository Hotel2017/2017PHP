<h1>修改訂餐</h1>
<h2>您要修改的的訂餐紀錄:</h2>
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
$or_id=$_GET["id"];
$rr_id=$_SESSION["rr_id"];
$find_od_record="SELECT *FROM order_record where or_id=$or_id";
$find_room_record="SELECT rr_RoomNumber FROM room_record where rr_id=$rr_id";
$find_dish="SELECT d_ID,d_name,d_price FROM dish";
$result1 = mysql_query($find_od_record);
$result2 = mysql_query($find_room_record);
$result4 = mysql_query($find_dish);
$row2 = mysql_fetch_assoc($result2);

echo "<table border=1>";
echo "<tr><th>房號</th>";
echo "<th>餐點名稱</th>";
echo "<th>單價</th>";
echo "<th>數量</th>";
echo "<th>送餐日期</th>";
echo "<th>送餐時間</th>";
echo "</tr>";


while($row1 = mysql_fetch_assoc($result1))
{
	//echo $row['rr_ID'];
	$d_ID=$row1["d_ID"];
	$find_dish_name="SELECT d_name,d_ID,d_price FROM dish where d_ID=$d_ID";
	$result3 = mysql_query($find_dish_name);
	$row3 = mysql_fetch_assoc($result3);
	
	echo "<tr>";
	echo "<td>".$row2["rr_RoomNumber"]."</td>";
	echo "<td>".$row3["d_name"]."</td>";
	echo "<td>".$row3["d_price"]."</td>";
	echo "<td>".$row1["or_Quantity"]."</td>";
	$quantity=$row1["or_Quantity"];
	echo "<td>".$row1["or_Date"]."</td>";
	echo "<td>".$row1["or_Time"]."</td>";
	echo "</tr>";
}
echo "</table>";


echo "<form action='update' method='post'>";
	echo "<input type='hidden' name='m_or_id' value='".$or_id."'>";
	echo "更改餐點：";
	echo "<select name='m_dish'>";
	while($row4 = mysql_fetch_assoc($result4)){
			if($row4["d_ID"]==$row3["d_ID"]){
				echo "<option selected='true' value='".$row4["d_ID"]."'>".$row4["d_name"]."</option>";
			}
			else{
				echo "<option value='".$row4["d_ID"]."'>".$row4["d_name"]."</option>";
			}
			
		}
	echo "</select><br>";
	echo "更改數量：";
	echo "<input type='number' name='m_quantity' min=1 max=5 value=".$quantity."><br>";
	echo "更改送餐日期：";
	$find_room_record_date="SELECT rr_Checkin,rr_Checkout FROM room_record where rr_id=$rr_id";
	$result5=mysql_query($find_room_record_date);
	$row5 = mysql_fetch_assoc($result5);
	$today=date("Y-m-d");
	echo "<input type='date' name='m_getdate' min='".$row5["rr_Checkin"]."' max='".$row5["rr_Checkout"]."'value='".$today."'><br>";
	echo "更改送餐時間：";
	?>
	<script type="text/javascript" src="../assets/js/jquery-3.2.1.js"></script>
	<script language=javaScript src="../assets/js/time_null.js"></script>
	<?php
	echo "<input type='time' name='m_gettime' value='now'><br>";
	echo "送餐時間最早為訂餐時間後45分鐘。<br>";
	echo "<input type='submit' value='送出修改'>";
	echo "</form>";
}
	
	if(isset($_POST["m_or_id"])){
		$m_or_id=$_POST["m_or_id"];
		$m_dish=$_POST["m_dish"];
		$m_quantity=$_POST["m_quantity"];
		$m_getdate=$_POST["m_getdate"];
		$m_gettime=$_POST["m_gettime"];
		$update="UPDATE order_record SET d_ID='$m_dish' , or_Quantity='$m_quantity' , or_Date='$m_getdate' , or_Time='$m_gettime'  WHERE or_ID='$m_or_id'";
		mysql_query($update);
		$msg="訂餐修改成功~";
		$redirect="success";
		alert_msg($msg,$redirect);
	
	}
