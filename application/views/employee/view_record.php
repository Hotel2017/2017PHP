<script src="../assets/js/tab.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<div class="abgne_tab">
		<ul class="tabs">
			<li><a href="#tab1">待付款訂單</a></li>
			<li><a href="#tab2">已付款訂單</a></li>
			<li><a href="#tab3">取消訂單</a></li>
			<li><a href="#tab4">待結帳訂單</a></li>
			<li><a href="#tab5">已結帳訂單</a></li>

		</ul>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<p>
					<?php
					//如果是會員就顯示
					if(isset($_SESSION["emp_identity"]))
					{
						$id = $_SESSION["emp_identity"];
						header("content-type:text/html;charset=utf8");
						date_default_timezone_set('Asia/Taipei');
						$today = date('Y-m-d');
						
						///////////////////////////////////////////////////////////////
						@$num =$_POST['searchOrderNumber'];
						@$member=$_POST['searchMember'];
						if(@$_POST['searchOrderNumber'] != '' && @$_POST['searchMember'] != '')
						{
							echo "<form action='' method = 'POST'>
									<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value='{$num}'/>
									<input type='search' name='searchMember' placeholder='會員查詢' value='{$member}'/>
									<input type='submit' name='search' value='搜尋'/>
							   </form>";
							$num = $_POST['searchOrderNumber'];
							$member = $_POST['searchMember'];
							$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='0' and rr_OrderNumber='$num' and rr_Member = '$member' group by rr_OrderNumber order by rr_DATE desc";
							$result = mysql_query($sql);
						}else if(@$_POST['searchOrderNumber'] != '')
						{
							echo "<form action='' method = 'POST'>
									<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value='{$num}'/>
									<input type='search' name='searchMember' placeholder='會員查詢' value=''/>
									<input type='submit' name='search' value='搜尋'/>
							   </form>";
							$num = $_POST['searchOrderNumber'];
							$member = $_POST['searchMember'];
							$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='0' and rr_OrderNumber='$num' group by rr_OrderNumber order by rr_DATE desc";
							$result = mysql_query($sql);
						}else if(@$_POST['searchMember'] != '')
						{
							echo "<form action='' method = 'POST'>
									<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value=''/>
									<input type='search' name='searchMember' placeholder='會員查詢' value='{$member}'/>
									<input type='submit' name='search' value='搜尋'/>
							   </form>";
							$num = $_POST['searchOrderNumber'];
							$member = $_POST['searchMember'];
							$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='0' and rr_Member = '$member' group by rr_OrderNumber order by rr_DATE desc";
							$result = mysql_query($sql);
						}
						else
						{
							echo "<form action='' method = 'POST'>
									<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value=''/>
									<input type='search' name='searchMember' placeholder='會員查詢' value=''/>
									<input type='submit' name='search' value='搜尋'/>
							   </form>";
							echo "<br>";
						$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='0' group by rr_OrderNumber order by rr_DATE desc";
						$result = mysql_query($sql);
						}
						///////////////////////////////////////////////////////////////
						// echo "<h2>有效訂單</h2>";
						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>會員</th>";
						echo "<th>房間數量</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>退訂</th>";
						echo "<th>價錢</th>";
						echo "<th>付款狀態</th>";
						echo "<th>付款</th>";
						echo "</tr>";
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
							$sql_room = "select room_Price from room where room_ID = {$row['room_ID']}";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["RoomCount"] * $row_room['room_Price'];


							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row["rr_Member"];
							echo "</td>";
							echo "<td>";
							echo $row["RoomCount"];
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
							echo "<a href='del_record?id={$row["rr_OrderNumber"]}'>退訂</a>";
							echo "</td>";
							echo "<td>";
							echo "$".$totalPrice;
							echo "</td>";
							echo "<td>";
							echo $paid;
							echo "</td>";
							echo "<td>";
							echo "<a href='pay?id={$row["rr_OrderNumber"]}'>付款</a>";
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
					if(isset($_SESSION["emp_identity"]))
					{
						$id = $_SESSION["emp_identity"];

						header("content-type:text/html;charset=utf8");
						date_default_timezone_set('Asia/Taipei');

						// ///////////////////////////////////////////////////////////////
						// @$num =$_POST['searchOrderNumber'];
						// @$member=$_POST['searchMember'];
						// if(@$_POST['searchOrderNumber'] != '' && @$_POST['searchMember'] != '')
						// {
						// 	echo "<form action='' method = 'POST'>
						// 			<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value='{$num}'/>
						// 			<input type='search' name='searchMember' placeholder='會員查詢' value='{$member}'/>
						// 			<input type='submit' name='search' value='搜尋'/>
						// 	   </form>";
						// 	$num = $_POST['searchOrderNumber'];
						// 	$member = $_POST['searchMember'];
						// 	$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='1' and rr_OrderNumber='$num' and rr_Member = '$member' group by rr_OrderNumber order by rr_DATE desc";
						// 	$result = mysql_query($sql);
						// }else if(@$_POST['searchOrderNumber'] != '')
						// {
						// 	echo "<form action='' method = 'POST'>
						// 			<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value='{$num}'/>
						// 			<input type='search' name='searchMember' placeholder='會員查詢' value=''/>
						// 			<input type='submit' name='search' value='搜尋'/>
						// 	   </form>";
						// 	$num = $_POST['searchOrderNumber'];
						// 	$member = $_POST['searchMember'];
						// 	$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='1' and rr_OrderNumber='$num' group by rr_OrderNumber order by rr_DATE desc";
						// 	$result = mysql_query($sql);
						// }else if(@$_POST['searchMember'] != '')
						// {
						// 	echo "<form action='' method = 'POST'>
						// 			<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value=''/>
						// 			<input type='search' name='searchMember' placeholder='會員查詢' value='{$member}'/>
						// 			<input type='submit' name='search' value='搜尋'/>
						// 	   </form>";
						// 	$num = $_POST['searchOrderNumber'];
						// 	$member = $_POST['searchMember'];
						// 	$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='1' and rr_Member = '$member' group by rr_OrderNumber order by rr_DATE desc";
						// 	$result = mysql_query($sql);
						// }
						// else
						// {
						// 	echo "<form action='' method = 'POST'>
						// 			<input type='search' name='searchOrderNumber' placeholder='訂單編號查詢' value=''/>
						// 			<input type='search' name='searchMember' placeholder='會員查詢' value=''/>
						// 			<input type='submit' name='search' value='搜尋'/>
						// 	   </form>";
						// 	echo "<br>";
						// $sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='1' group by rr_OrderNumber order by rr_DATE desc";
						// $result = mysql_query($sql);
						// }
						// ///////////////////////////////////////////////////////////////
						$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1'  and rr_VisaCheck ='1' group by rr_OrderNumber order by rr_DATE desc";
						$result = mysql_query($sql);


						// echo "<h2>有效訂單</h2>";
						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>會員</th>";
						echo "<th>房間數量</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>退訂</th>";
						echo "<th>價錢</th>";
						echo "<th>付款狀態</th>";
						echo "</tr>";
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
							$sql_room = "select room_Price from room where room_ID = {$row['room_ID']}";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["RoomCount"] * $row_room['room_Price'];


							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row["rr_Member"];
							echo "</td>";
							echo "<td>";
							echo $row["RoomCount"];
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
							echo "<a href='del_record?id={$row["rr_OrderNumber"]}'>退訂</a>";
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
					if(isset($_SESSION["emp_identity"]))
					{
						$id = $_SESSION["emp_identity"];

						header("content-type:text/html;charset=utf8");
						date_default_timezone_set('Asia/Taipei');

						$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '0' group by rr_OrderNumber order by rr_DATE desc";
						$result = mysql_query($sql);


						// echo "<h2>有效訂單</h2>";
						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>會員</th>";
						echo "<th>房間數量</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>回復訂單</th>";
						echo "<th>價錢</th>";
						echo "<th>付款狀態</th>";
						echo "</tr>";
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
							$sql_room = "select room_Price from room where room_ID = {$row['room_ID']}";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["RoomCount"] * $row_room['room_Price'];


							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row["rr_Member"];
							echo "</td>";
							echo "<td>";
							echo $row["RoomCount"];
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
							echo "<a href='recover_record?id={$row["rr_OrderNumber"]}'>回復訂單</a>";
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
			<div id="tab4" class="tab_content">
				<p>
					<?php
					if(isset($_SESSION["emp_identity"]))
					{
						$id = $_SESSION["emp_identity"];

						header("content-type:text/html;charset=utf8");
						date_default_timezone_set('Asia/Taipei');

						$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1' and rr_VisaCheck='1' and rr_finish = '0' and rr_Checkout <='$today' group by rr_OrderNumber order by rr_DATE desc";
						$result = mysql_query($sql);


						// echo "<h2>有效訂單</h2>";
						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>會員</th>";
						echo "<th>房間數量</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>價錢</th>";
						echo "<th>付款狀態</th>";
						echo "<th>結帳</th>";
						echo "</tr>";
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
							$sql_room = "select room_Price from room where room_ID = {$row['room_ID']}";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["RoomCount"] * $row_room['room_Price'];


							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row["rr_Member"];
							echo "</td>";
							echo "<td>";
							echo $row["RoomCount"];
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
							echo "<td>";
							echo $paid;
							echo "</td>";
							echo "<td>";
							echo "<a href='insert_invoice?id={$row["rr_OrderNumber"]}'>結帳</a>";
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
			<div id="tab5" class="tab_content">
				<p>
					<?php
					if(isset($_SESSION["emp_identity"]))
					{
						$id = $_SESSION["emp_identity"];

						header("content-type:text/html;charset=utf8");
						date_default_timezone_set('Asia/Taipei');

						$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record  where rr_State = '1' and rr_VisaCheck='1' and rr_finish = '1' group by rr_OrderNumber order by rr_DATE desc";
						$result = mysql_query($sql);


						// echo "<h2>有效訂單</h2>";
						echo "<table border = '1'>";
						echo "<tr>";
						echo "<th>訂單編號</th>";
						echo "<th>會員</th>";
						echo "<th>房間數量</th>";
						echo "<th>訂房時間</th>";
						echo "<th>入住日期</th>";
						echo "<th>退房日期</th>";
						echo "<th>價錢</th>";
						echo "<th>結帳</th>";
						echo "</tr>";
						while($row = mysql_fetch_assoc($result))
						{
							//計算總房價
							$sql_room = "select room_Price from room where room_ID = {$row['room_ID']}";
							$result_room = mysql_query($sql_room);
							$row_room = mysql_fetch_assoc($result_room);
							$totalPrice = $row["RoomCount"] * $row_room['room_Price'];


							echo "</tr>";
							echo "<td>";
							echo $row["rr_OrderNumber"];
							echo "</td>";
							echo "<td>";
							echo $row["rr_Member"];
							echo "</td>";
							echo "<td>";
							echo $row["RoomCount"];
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
							echo "<td>";
							echo "<a href='invoice?id={$row["rr_OrderNumber"]}'>看明細</a>";
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