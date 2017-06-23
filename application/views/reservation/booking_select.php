<?php
date_default_timezone_set('Asia/Taipei');
$today=date("Y-m-d");

if (isset($_POST["inDate"])  && isset($_POST["quantity"])) 
{	
	if($_POST["inDate"] >= $today){


	//抓取form值
	$inDate = $_POST["inDate"];
	$outDate = $_POST["outDate"];
	$quantity = $_POST["quantity"];
	setcookie("inDate",$inDate);
	setcookie("outDate",$outDate);
	setcookie("quantity",$quantity);
	$no = $_POST["No"];
	
	//變數(房間ID)
	setcookie("room_ID",$no);
	$room_ID =  $_COOKIE["room_ID"];

		
		//比較日期
		$compare = "select SUM(rr_RoomCount) AS sum from room_record where room_ID = '$no' and rr_Checkout > '$inDate' and rr_Checkin <= '$inDate'  and rr_State ='1'";
		$result = mysql_query($compare);
		$row = mysql_fetch_assoc($result);

		//選擇房型的房間數
		$test1 = "select * from room where room_ID = '$no'";
		$result1 = mysql_query($test1);
		$row1 = mysql_fetch_assoc($result1);
		
		//房號
        $selectRoomNumber = "select * from room_number where rn_RoomID = '1'";
        $roomnumber = mysql_query($selectRoomNumber);
        $roomNumber = mysql_fetch_assoc($roomnumber);
		
		
		//日期相減
		$diff = (strtotime($outDate) - strtotime($inDate))/ 86400;
		$sql = "select *  from room_record where  room_ID = '$room_ID' and '$outDate' > rr_Checkin and '$inDate' < rr_Checkout having rr_Checkin > '$inDate'";
		$result2 = mysql_query($sql);
		//範圍日期內的房間總數
		$sum = "";
		while($row2 = mysql_fetch_assoc($result2)){
			$sum += $row2["rr_RoomCount"];
		}
		if($row1["room_Quantity"] < $sum + $quantity)
		{
			echo "已訂滿<br>";
			header("Refresh:2;url=booking?id=$room_ID");
		}
		else
		{
			//判斷選擇的日期是否還有空房
			if($row1["room_Quantity"] >= $row["sum"]+ $quantity)
			{				
				echo "有足夠的空房，訂房成功";
				header("Location:fillData");
			}
			//如果選擇日期還無人訂，判斷所選房間間數是否有超過房間數
			else
			{		
				$remain = $row1["room_Quantity"] - $row["sum"];
				echo "剩餘{$remain}間房間";
				//echo "選擇日期無空房";
				header("Refresh:2;url=booking?id=$room_ID");
			}
		}
	}
	else
	{
		echo "日期不正確";
	}
}
else
{
	echo "請輸入完整資料";
}



?>