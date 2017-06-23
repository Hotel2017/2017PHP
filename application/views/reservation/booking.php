<!-- script >>> slider -->
<script src="../assets/js/slider.js"></script>
<script src="../assets/js/booking_date.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Content -->
<section class="cooking">
	<?php  
		$id = $_GET["id"];
		$sql = "SELECT * FROM room where room_ID=$id";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);

        $remarks = str_replace("\n", "<br />", $row[12]);

		//判斷從 index or fillData ?
		$url = $_SERVER["HTTP_REFERER"];
		date_default_timezone_set('Asia/Taipei');
		
		//從fillData、booking_select 來修改訂房資訊
		if(preg_match('/fillData/', $url) || preg_match('/booking_select/', $url))
		{
			$inDate = $_COOKIE["inDate"];
			$outDate = $_COOKIE["outDate"];
			$quantity = $_COOKIE["quantity"];
				echo "<header class=\"main\">
					<h1>$row[1]</h1>
				</header>";
				echo "
					<div id=\"abgneBlock\">
						<ul class=\"list\">
				";
							for ($i=8; $i<12; $i++) { 
								echo "
									<li><a target=\"_blank\" href=\"#\"><img src=\"../images/room/$row[7]/$row[$i].jpg\" /></a></li>
								";
							}
				echo "
						</ul>
					</div>
				";
				echo "<h2>房型介紹</h2>";
				echo "<p>$row[5]</p>";
				echo "<h2>住房資訊</h2>";
				echo "<p>$remarks</p>";

			$room_ID =  $_COOKIE["room_ID"];
			$today=date("Y-m-d");
			echo "住房資訊";	
			echo"<form action='booking_select' method='POST'>";
			echo"入住日期：<input type='date' name='inDate' id='inDate' value='$inDate' min ='{$today}'><br>";
			echo "入住天數：<input type='number' min='1' max='30' value='1' name = 'day' id='day'onclick='inputDate()'><br>";
			echo"退房日期：<input type='date' name='outDate' id='outDate' value='$outDate' readonly><br>";
			echo"房間數量：<input type='number' name='quantity' min='1' max='4'  value='$quantity'/>沒有空房，下一頁會提示<br>";
			echo"<input type='hidden' name='No' value='$id'>";
			echo"<input type='submit' value='查詢空房'>";
			echo"<input type='button' onclick=\"location.href='reservation'\" value='客房列表'>";
			echo"</form>";
		}
		
		//從首頁進來
		else 
		{
				echo "<header class=\"main\">
					<h1>$row[1]</h1>
				</header>";
				echo "
					<div id=\"abgneBlock\">
						<ul class=\"list\">
				";
							for ($i=8; $i<12; $i++) { 
								echo "
									<li><a target=\"_blank\" href=\"#\"><img src=\"../images/room/$row[7]/$row[$i].jpg\" /></a></li>
								";
							}
				echo "
						</ul>
					</div>
				";
				echo "<header>
						<h2>房型介紹</h2>
					</header>";
				echo "<p>$row[5]</p>";
				echo "<h2>住房資訊</h2>";
				echo "<p>$remarks</p>";

			$today=date("Y-m-d");
			echo"<form action='booking_select' method='POST'>";
			echo"入住日期：<input type='date' name='inDate' id='inDate' value='".date("Y-m-d")."' min ='{$today}'><br>";
			echo "入住天數：<input type='number' min='1' max='30' value='1' name = 'day' id='day'onclick='inputDate()'><br>";
			echo"退房日期：<input type='date' name='outDate' id='outDate' value='".date("Y-m-d",time() +1*86400)."' readonly><br>";
			echo"房間數量：<input type='number' name='quantity' min='1' max='4'  value='1'/>沒有空房，下一頁會提示<br>";
			echo"<input type='hidden' name='No' value='$id'>";
			echo"<input type='submit' value='查詢空房'>";
			echo"<input type='button' onclick=\"location.href='reservation'\" value='客房列表'>";
			echo"</form>";
		}
	?>
</section>