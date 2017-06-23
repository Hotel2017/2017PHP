<script src="../assets/js/tab.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<div class="abgne_tab">
		<ul class="tabs">
			<li><a href="#tab1">已付款訂單</a></li>
			<li><a href="#tab2">未付款訂單</a></li>
			<li><a href="#tab3">取消訂單</a></li>

		</ul>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<p>
					<?php
					header("content-type:text/html;charset=utf8");
					include("include.php");
					date_default_timezone_set('Asia/Taipei');

					//如果是會員就顯示
					if(isset($_SESSION["identity"]))
					{
						$id = $_SESSION["identity"];

						$sql = "select *,sum(rr_RoomCount) as count from room_record where rr_Member = '$id' and  rr_State = 1 and rr_VisaCheck = '1' group by rr_OrderNumber";
						$result = mysql_query($sql);
						

						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>房間名稱</th>";
						echo "<th>房數</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>退房</th>";
						echo "<th>價錢</th>";
						echo "<th>付款</th>";
						while($row = mysql_fetch_assoc($result))
						{
							//判斷是否付款
							if($row["rr_VisaCheck"] == 1){
								$paid = $row["rr_VisaCheck"];
								$paid = "已付款";
							}
							else
							{
								$paid = $row["rr_VisaCheck"];
								$paid = "未付款";
							}
							$id = $row["rr_ID"];

							//計算總房價
							$sql_room = "select room_Price from room where room_ID = '{$row['room_ID']}'";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["count"] * $row_room['room_Price'];
							//抓取房間名稱
							$sql2 = "select * from room where room_ID = '{$row["room_ID"]}'";
							$result2 = mysql_query($sql2);
							$row2 = mysql_fetch_assoc($result2);
							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row2["room_Name"];
							echo "</td>";
							echo "<td>";
							echo $row["count"];
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
							echo "<td>";
							echo "<a href='del_record?id=$id'>退訂</a>";
							echo "</td>";
							echo "<td>";
							echo "$".$totalPrice;
							echo "</td>";
							echo "<td>";
							echo $paid;
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
				</p>
			</div>
			<div id="tab2" class="tab_content">
				<p>
					<?php
					if(isset($_SESSION["identity"]))
					{
						$id = $_SESSION["identity"];

						$sql = "select *,sum(rr_RoomCount) as count from room_record where rr_Member = '$id' and  rr_State = 1 and rr_VisaCheck = '0' group by rr_OrderNumber";
						$result = mysql_query($sql);
						

						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>房間名稱</th>";
						echo "<th>房數</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>退房</th>";
						echo "<th>價錢</th>";
						echo "<th>付款</th>";
						while($row = mysql_fetch_assoc($result))
						{
							//判斷是否付款
							if($row["rr_VisaCheck"] == 1){
								$paid = $row["rr_VisaCheck"];
								$paid = "已付款";
							}else{
								$paid = $row["rr_VisaCheck"];
								$paid = "未付款";
							}
							$id = $row["rr_ID"];
							//計算總房價
							$sql_room = "select room_Price from room where room_ID = '{$row['room_ID']}'";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["count"] * $row_room['room_Price'];
							//抓取房間名稱
							$sql2 = "select * from room where room_ID = '{$row["room_ID"]}'";
							$result2 = mysql_query($sql2);
							$row2 = mysql_fetch_assoc($result2);

							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row2["room_Name"];
							echo "</td>";
							echo "<td>";
							echo $row["count"];
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
							echo "<td>";
							echo "<a href='del_record?id=$id'>退訂</a>";
							echo "</td>";
							echo "<td>";
							echo "$".$totalPrice;
							echo "</td>";
							echo "<td>";
							echo $paid;
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
				</p>
			</div>
			<div id="tab3" class="tab_content">
				<p>
					<?php
					if(isset($_SESSION["identity"]))
					{
						$id = $_SESSION["identity"];

						$sql = "select *,sum(rr_RoomCount) as count from room_record where rr_Member = '$id' and  rr_State = '0' group by rr_OrderNumber";
						$result = mysql_query($sql);
						

						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>房間名稱</th>";
						echo "<th>房數</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>價錢</th>";
						while($row = mysql_fetch_assoc($result))
						{
							//判斷是否付款
							if($row["rr_VisaCheck"] == 1){
								$paid = $row["rr_VisaCheck"];
								$paid = "已付款";
							}else{
								$paid = $row["rr_VisaCheck"];
								$paid = "未付款";
							}
							//計算總房價
							$sql_room = "select room_Price from room where room_ID = '{$row['room_ID']}'";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["count"] * $row_room['room_Price'];
							//抓取房間名稱
							$sql2 = "select * from room where room_ID = '{$row["room_ID"]}'";
							$result2 = mysql_query($sql2);
							$row2 = mysql_fetch_assoc($result2);

							$id = $row["rr_ID"];
							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row2["room_Name"];
							echo "</td>";
							echo "<td>";
							echo $row["count"];
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
							echo "<td>";
							echo "$".$totalPrice;
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
				</p>
			</div>
		</div>
	</div>