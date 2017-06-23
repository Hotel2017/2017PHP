<script src="assets/js/open_img.js"></script>
<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/time_null.js"></script>
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
	
	



if(isset($_SESSION["identity"]))/*判斷是否已經登入*/
{
	$ID=$_SESSION["identity"];
	//$ID="Y125421401";
	$find_record = "select * from room_record where rr_Member = '$ID' and rr_State = '1'";
	$result1 = mysql_query($find_record);
	//$row = mysql_fetch_assoc($result1);
	//echo $row["rr_RoomNumber"];
	echo "<h1>五宿山大飯店客房送餐服務</h1><br>";
	echo "<h3>您的住房資料：</h3><br>";
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>姓名</th>";
	echo "<th>房型</th>";
	echo "<th>房號</th>";
	echo "<th>入住日期</th>";
	echo "<th>退房日期</th>";
	echo "<th>客房送餐服務</th>";
	echo "<th>查看訂餐資訊</th>";
	echo "</tr>";
	while($row = mysql_fetch_assoc($result1))
	{
	//echo $row["rr_RoomNumber"];
	
	$find_member = "select * from member where mem_Identity = '$ID'";
	$result2 = mysql_query($find_member);
	$row2 = mysql_fetch_assoc($result2);
	
	$room_ID=$row["room_ID"];
	$find_room = "select * from room where room_ID ='$room_ID'";
	$result3 = mysql_query($find_room);
	$row3 = mysql_fetch_assoc($result3);
	
	echo "<tr>";
	echo "<td>".$row2["mem_Name"]."</td>";
	echo "<td>".$row3["room_Name"]."</td>";
	echo "<td>".$row["rr_RoomNumber"]."</td>";
	echo "<td>".$row["rr_Checkin"]."</td>";
	echo "<td>".$row["rr_Checkout"]."</td>";
	echo "<td>";
	echo "<a href='order_dish?id=".$row["rr_ID"]."'>我要訂餐</a>";
	echo "</td>";
	echo "<td>";
	echo "<a href='order_dish/success?id=".$row["rr_ID"]."'>查詢、修改本房訂餐資訊</a>";
	echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
	
	
	if(isset($_GET['id'])){
		$find_dish="select *from dish";
		$result4 = mysql_query($find_dish);
		$id=$_GET['id'];
		
		$find_time="select * from room_record where rr_ID=$id";
		$result5=mysql_query($find_time);
		$row5 = mysql_fetch_assoc($result5);
		
		echo "<form action='order_dish/order_check' method='post'>";
		$index=0;

		echo "
		<h3>本日菜單</h3>
			<div class=\"table-wrapper\">
				<table class=\"alt\">
					<thead>
						<tr>
							<th>餐點名稱</th>
							<th>單價</th>
							<th>餐點描述</th>
							<th>訂購數量</th>
						</tr>
					</thead>
					<tbody>
		";
		$i = 1;
		while($row4 = mysql_fetch_assoc($result4)){
			//點餐要先點audio，然後再選數量有點多此一舉。看能不能數量預設為0然後只要值是大於0就把他輸入資料庫
			
				echo "

					<tr class=\"openimg\">
						<td class=\"open_pic$i\">
							<input type='hidden' name='rr_id'value='".$id."'>
							".$row4['d_Name']."(點擊看圖片)
							<img style=\"max-width: 20em; max-height: 20em; display: none;\" src=\"images/dish/".$row4['d_Img1']."/".$row4['d_Img2'].".jpg\"></td>
						<td>".$row4['d_Price']."</td>	
						<td>".$row4["d_Intro"]."</td>
						<td><input type='number' name='quantity_".$index."' value=0 min=0 max=5 style=\"width: 5em;\"></td>
					</tr>	
					";
		 //把客戶所選擇的所有餐點都放進來 $totle_dish 裡面
					$i++;
					$index++;
		}
	
		//$_SESSION["index"]=$index;
		//echo $index;
		echo "<input type='hidden' name='index' value='".$index."'>";
		
		echo "</form>";
		
		
		
		echo "</tbody>
				<tfoot>
					<tr>
						<td colspan=\"2\"></td>

						<td></td>
					</tr>
				</tfoot>
			</table>
		</div>
		";		
				//時間預設為現在時間加上45分鐘
				$today=date("Y-m-d");
				$checkin_date=$row5["rr_Checkin"];
				$checkout_date=$row5["rr_Checkout"];
				$ok_time=strtotime($checkin_date);
				$count_time=ceil(($ok_time-time())/60/60/24);
				if($today>=$checkin_date && $today<=$checkout_date){
					echo "選擇送到房間的日期：";
					echo "<input type='date' name='getdate' min='".$today."' max='".$row5["rr_Checkout"]."' value='".$today."' ><br>";
					echo "選擇送到房間的時間：";
					echo "<input type='time' name='gettime' value='now'><br>";
					echo "送餐時間最早為訂餐時間後45分鐘。<br>";
					echo "<input type='submit' value='送出'>";
				}
				else{
					echo "送餐時間最早為訂餐時間後45分鐘。<br>";
					echo "只能在入住時間訂餐，再".$count_time."天後可以訂餐";
				}
				echo "</form>";
				
				
		
	}
		
}
else/*為登入進來此頁面跳出警告訊息並切換入至登入頁面*/
{
	$msg="您還未登入，請登入後再使用本服務。";
	$redirect="http://140.127.218.151";
	alert_msg($msg,$redirect);
	
}
?>