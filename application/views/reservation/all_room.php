		<!-- Content -->
			<section>
				<header class="major">
					<h1>客房查詢</h1>
				</header>
				
				<?php if(isset($_SESSION["emp_identity"])){
					echo "<div class=\"long_button\">
						<ul class=\"actions\" >
							<li><a href=\"admin/upload_room\" class=\"button special fit\">新增客房</a></li>
							<li><a href=\"admin/delete_room\" class=\"button fit\">刪除客房</a></li>
						</ul>
					</div>";
				}?>
				<h2>尋找客房：</h2>
				<form action="reservation" method="POST">
					<div class="row">
						<div class="6u 12u$(medium)">
							選擇房型：<br>
							<select  name="type">
								<option value="0">所有客房</option>
								<option value="雙人房">雙人房</option>
								<option value="四人房">四人房</option>
							</select>
						</div>
						<div class="6u 12u$(medium)">
							客房價位($NT 新台幣)：<br>
							<select  name="price">
							<option value="0">所有價位</option>
								<option value="room_Price BETWEEN 0 and 2999">0 ~ 2,999</option>
								<option value="room_Price BETWEEN 3000 and 4999">3,000 ~ 4,999</option>
								<option value="room_Price BETWEEN 5000 and 9999">5,000 ~ 9,999</option>
								<option value="room_Price BETWEEN 10000 and 100000">10,000 +</option>
							</select><br>
						</div>
						<input type="submit" value="查詢">
					</div>
				</form>

				<div class="posts">
					<?php
						$where = '';
						$rt = '';
						$rp ='';
						$and = '';
						if (isset($_POST['type']) or isset($_POST['price'])) {  //開始篩選
							$type = $_POST["type"];
							$price = $_POST["price"];
							$where = "where";
							if ($type != "0") {
								$rt = "room_Size = '$type'";
							}
							if ($price != "0") {
								$rp = "$price";
							}
							if ($type != "0" and $price != "0") {
								$and = 'and';
							}
							
						}
						$i = 0;
						$sql = "SELECT * FROM room $where $rt $and $rp";
				        $result = mysql_query($sql);
						while($num = mysql_fetch_row($result)) { 
					?>
						<article>
							<div class="display_range" style=" overflow : hidden;text-overflow: ellipsis; display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;">
								<?php
								$i++;
								again:
									$sql_1 = "SELECT * FROM room where room_ID=$i";
							        $result_1 = mysql_query($sql_1);
							        $row = mysql_fetch_row($result_1);
							        if ($i != $row[0]) {      //為了避免因為room_id跳號產生BUG
							        	$i++;
										goto again;
							        }
							        else{
							        	echo "<a href=\"reservation/show_detail?id=$i\" class=\"image\"><img src=\"images/room/$row[7]/$row[8].jpg\" /></a>";
										echo "<header>
												<h3>$row[1]</h3>
											</header>";
										echo "<p>$row[5]</p>";
							        }
								?>
							</div>
							<ul class="actions">
								<li><a href="reservation/booking?id=<?php echo $i; ?>" class="button">訂房</a></li>
								<li><a href="reservation/show_detail?id=<?php echo $i; ?>" class="button special">詳細</a></li>
								<?php
									if (isset($_SESSION["emp_identity"])) {
										echo "<li class=\"admin\"><a href=\"admin/update_room?id=$i \" class=\"button\">更改</a></li>";
									}
								?>		
							</ul>
						</article>
					<?php
						}
					?>
				</div>
			</section>