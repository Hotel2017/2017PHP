<?php

//取得cookie變數
$inDate = $_COOKIE["inDate"];
$outDate = $_COOKIE["outDate"];
$quantity = $_COOKIE["quantity"];
$totalPrice = $_COOKIE["totalPrice"];
$room_ID =  $_COOKIE["room_ID"];


//尋找新的訂單
$sql = "select * from room_record where room_ID = '$room_ID' and rr_Checkin = '$inDate' and rr_Checkout ='$outDate'";
$result = mysql_query($sql);
$show_roomrecord = mysql_fetch_assoc($result);
$id = $show_roomrecord["rr_Member"];
$roomid = $show_roomrecord["room_ID"];
//尋找訂單的使用者
$sql1 = "select * from member where mem_Identity = '$id'";
$result1 = mysql_query($sql1);
$show_member = mysql_fetch_assoc($result1);

$sql2 = "select * from room where room_ID = '$roomid'";
$result2 = mysql_query($sql2);
$show_room = mysql_fetch_assoc($result2);
?>

<h1>訂單完成-確認訂單資料</h1>
	<section id="banner">
	<!--訂房人資料 -->
		<div class="content">
			<h2>訂房人資料</h2>
			<label for="">姓名：<?php echo $show_member["mem_Name"];?></label>
			<label for="">身分證字號：<?php echo $show_member["mem_Identity"];?></label>
			<label for="">稱謂：<?php echo $show_member["mem_Gender"];?></label>
			<label for="">聯絡信箱：<?php echo $show_member["mem_Email"];?></label>
			<label for="">連絡電話：<?php echo $show_member["mem_Phone"];?></label>
<hr>
	<!--訂房資料 -->
			<h2>訂房資料</h2>
			<label for="">入住期間：<?php echo $show_roomrecord["rr_Checkin"];?>-<?php echo $show_roomrecord["rr_Checkout"];?></label>
			<label for="">房間名稱：<?php echo $show_room["room_Name"];?></label>
			<label for="">房間型：<?php echo $show_room["room_Size"];?></label>
			<label for="">房間數量：<?php echo $quantity;?></label>
			<label for="">價錢：<?php echo $totalPrice;?></label>
		</div>
<!--匯款資料 -->
		<div class="image object">
			<h2>匯款資訊：</h2>
			<p>
				銀行名稱：玉山銀行楠梓分行<br>
				銀行代碼：808<br>
				帳戶名稱：吾宿山國際飯店<br>
				銀行帳號：0200-000-888888<br>
			</p>
			<p>
				<span style="color: red;">匯入款項後，請用E-mail或來電確認</span><br>
				e-mail：mountain@gmail.com<br>
				來電：0912-345678<br>
				告知匯款帳號後4碼喔！<br>
				如需退訂，請於三日前來電通知<br>
				我們會扣除100元手續費喔！<br>
			</p>
		</div>
	</section>
	<div style="width: 80%; margin: -1.5em 10% 0 10%;">
		<ul class="actions" >
			<li style="width: 100%;"><a href="http://140.127.218.151" class="button special fit">回首頁</a></li>
		</ul>
	</div>
