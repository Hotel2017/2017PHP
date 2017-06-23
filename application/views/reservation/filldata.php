<section id="banner">
	<div class="content">
		<?php
			//登入狀態
			if(isset($_SESSION["identity"]))
			{
				$identity = $_SESSION["identity"];
				$query = "select * from member where mem_Identity = '$identity'";
			    $result = mysql_query($query);
			    $row = mysql_fetch_assoc($result);

			    //從會員資料抓取值
			    $username=$row["mem_Name"];
			    $identity=$row["mem_Identity"];
			    $email=$row["mem_Email"];
			    $phone=$row["mem_Phone"];
			    $gender=$row["mem_Gender"];

				echo "<h1>輸入客戶資料</h1>";
				echo "<form action='register_check_member' method='POST'>";
					echo "*訂房人姓名： <input type='text' name='username' value='$username'><br>";
				echo "	*身分證字號： <input type='text' name='identity' value='$identity' readonly><br>";
				echo "	*稱謂 <input type=\"radio\" id=\"demo-priority-man\" value='男' name=\"gender\" checked>
					<label for=\"demo-priority-man\">男</label>";
				echo "	 <input type=\"radio\" id=\"demo-priority-weman\" value='女' name=\"gender\">
					<label for=\"demo-priority-weman\">女</label><br>";
				echo "	*E-Mail: <input type='email' name='email' value='$email'><br>";
				echo "	*連絡電話：<input type='text' name='phone' value='$phone'><br>";
				echo "	<input type='submit' name='Submit' value='下一步'>";
				echo "</form>";

			}
			//未登入狀態
			else
			{
				echo "<h1>輸入客戶資料</h1>";
				echo "<form action='register_check' method='POST'>";
					echo "*訂房人姓名： <input type='text' name='username'><br>";
				echo "	*身分證字號： <input type='text' name='identity'><br>";
				echo "	*稱謂 <input type=\"radio\" id=\"demo-priority-man\" value='男' name=\"gender\" checked>
					<label for=\"demo-priority-man\">男</label>";
				echo "	 <input type=\"radio\" id=\"demo-priority-weman\" value='女' name=\"gender\">
					<label for=\"demo-priority-weman\">女</label><br>";
				echo "	*E-Mail: <input type='email' name='email' ><br>";
				echo "	*連絡電話：<input type='text' name='phone' ><br>";
				echo "	<input type='submit' name='Submit' value='下一步'>";
				echo "</form>";
			}

			date_default_timezone_set('Asia/Taipei');
			//取得cookie變數
			$inDate = $_COOKIE["inDate"];
			$outDate = $_COOKIE["outDate"];
			$quantity = $_COOKIE["quantity"];
			$room_ID =  $_COOKIE["room_ID"];
			$nowdate = date('Y-m-d H:i');
			//取得房間資料
			$select = "select * from room where room_ID = '$room_ID'";
			$result = mysql_query($select);
			$roomData = mysql_fetch_assoc($result);

			$roomName = $roomData["room_Name"];
			$room_Price = $roomData["room_Price"];
			$roomSize = $roomData["room_Size"];

			//計算價錢
			$roomPrice = $room_Price * $quantity;
			setcookie("totalPrice",$roomPrice);
		?>
	</div>
	<div class="image object">
		<h1>訂房資料</h1>
		<!-- 顯示訂房訊息(確認資料) -->
		<p>入住期間：<?php echo $inDate;?> - <?php echo $outDate; ?><br>
		房間名稱：<?php  echo $roomName?><br>
		房型：<?php  echo $roomSize?><br>
		房間數量：<?php  echo $quantity?><br>
		價錢：<?php  echo $roomPrice?><br>
		<a href="booking?id=<?php echo $room_ID;?>">變更</a><br>
		</p>
	</div>
</section>