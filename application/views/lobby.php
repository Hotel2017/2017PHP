<!-- 負責人：田安得 -->	
					<!-- Banner -->
					<section id="banner">
						<div class="content">
						<!-- 後台編輯：標題與文字 -->
							<?php
								$sql = "SELECT * FROM text where text_name='index_introduct'";
						        $result = mysql_query($sql);
						        $row = mysql_fetch_row($result);
						        $content3 = str_replace("\n", "<br />", $row[3]); //讓<area>裡面可以直接跳行
								echo "<header>
										<h1>$row[2]<br>$row[5]</h1>
									</header>";
								echo "<p>{$content3}</p>";
							?>
							<ul class="actions">
								<!-- <li><a href="#" class="button big">Learn More</a></li> -->
								<!-- ?id=後面接資料庫的text_name 
								只有員工登入後才能更改-->
								<?php
									if (isset($_SESSION["emp_identity"])) {
										echo "<li class=\"admin\"><a href=\"admin/update_text?id=index_introduct\" class=\"button special\">更改</a></li>";
									}
								?>								
							</ul>
						</div>
						<!-- 首頁圖片 -->
						<span class="image object">
							<img src="images/summer.jpg" alt="" />
						</span>
					</section>

				<!-- 促銷方案 -->
					<section>
						<header class="major">
							<h2>促銷方案</h2>
						</header>
						<div class="features">
							<article>
								<span class="icon fa-diamond"></span>
								<div class="content">
								<?php
									$sql = "SELECT * FROM text where text_name='index_promotion1'";
							        $result = mysql_query($sql);
							        $row = mysql_fetch_row($result);
									echo "<header>
											<h3>$row[2]</h3>
										</header>";
									echo "<p>$row[3]</p>";
								?>
									<ul class="actions">
									<?php
										if (isset($_SESSION["emp_identity"])) {
											echo "<li class=\"admin\"><a href=\"admin/update_text?id=index_promotion1\" class=\"button special\">更改</a></li>";
										}
									?>		
									</ul>
								</div>
							</article>
							<article>
								<span class="icon fa-paper-plane"></span>
								<div class="content">
									<?php
										$sql = "SELECT * FROM text where text_name='index_promotion2'";
								        $result = mysql_query($sql);
								        $row = mysql_fetch_row($result);
										echo "<header>
												<h3>$row[2]</h3>
											</header>";
										echo "<p>$row[3]</p>";
									?>
									<ul class="actions">
									<?php
										if (isset($_SESSION["emp_identity"])) {
											echo "<li class=\"admin\"><a href=\"admin/update_text?id=index_promotion2\" class=\"button special\">更改</a></li>";
										}
									?>		
									</ul>
								</div>
							</article>
							<div style="width: 80%; margin: 4% 10% 0 10%;">
								<ul class="actions" >
									<li style="width: 100%;"><a href="news/promotion" class="button special fit">More</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- 客房推薦 -->
					<section>
						<header class="major">
							<h2>推薦客房</h2>
						</header>
						<div style="margin:-5% 2% 1% 0; font-size: 1.1em;" align="right">
							<a href="reservation">查看全部</a>
						</div>
						<div class="posts">
							<article>
								<div class="display_range" style=" overflow : hidden;text-overflow: ellipsis; display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;">
									<?php
										$sql = "SELECT * FROM room where room_ID='5'";
								        $result = mysql_query($sql);
								        $row = mysql_fetch_row($result);
										echo "<a href=\"#\" class=\"image\"><img src=\"images/room/$row[7]/$row[8].jpg\" /></a>";
										echo "<header>
												<h3>$row[1]</h3>
											</header>";
										echo "<p>$row[5]</p>";

									?>
								</div>
								<ul class="actions">
									<li><a href="reservation/booking?id=5" class="button">訂房</a></li>
									<li><a href="reservation/show_detail?id=5" class="button special">詳細</a></li>
									<?php
										if (isset($_SESSION["emp_identity"])) {
											echo "<li class=\"admin\"><a href=\"admin/update_room?id=5\" class=\"button\">更改</a></li>";
										}
									?>		
								</ul>
							</article>
							<article>
								<div class="display_range" style=" overflow : hidden;text-overflow: ellipsis; display: -webkit-box;-webkit-line-clamp: 2; -webkit-box-orient: vertical;">
									<?php
										$sql = "SELECT * FROM room where room_ID='1'";
								        $result = mysql_query($sql);
								        $row = mysql_fetch_row($result);
								        echo "<a href=\"#\" class=\"image\"><img src=\"images/room/$row[7]/$row[8].jpg\" /></a>";
										echo "<header>
												<h3>$row[1]</h3>
											</header>";
										echo "<p>$row[5]</p>";
									?>
								</div>
								<ul class="actions">
									<li><a href="reservation/booking?id=1" class="button">訂房</a></li>
									<li><a href="reservation/show_detail?id=1" class="button special">詳細</a></li>
									<?php
										if (isset($_SESSION["emp_identity"])) {
											echo "<li class=\"admin\"><a href=\"admin/update_room?id=1\" class=\"button\">更改</a></li>";
										}
									?>		
								</ul>
							</article>
						</div>
					</section>
				
				<!-- 在地指南 -->
					<section>
						<div style="margin: 0 10% 0 10%">
							<header class="major">
								<h2>在地指南</h2>
							</header>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6289.121830827492!2d120.88452312019263!3d23.481961425008357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ef046f98c50ab57!2z5o6S6Zuy55m75bGx5pyN5YuZ5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1495778891758" width="100%%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
								<?php
								$sql = "SELECT * FROM text where text_name='index_local_guide'";
						        $result = mysql_query($sql);
						        $row = mysql_fetch_row($result);
								echo "<p>$row[3]</p>";
								if (isset($_SESSION["emp_identity"])) {
										echo "<li class=\"admin\"><a href=\"admin/update_text?id=index_local_guide\" class=\"button special\">更改</a></li>";
									}
								?>

							<div style="width: 80%; margin: 4% 10% 0 10%;">
								<ul class="actions" >
									<li style="width: 100%;"><a href="local_guide" class="button special fit">More</a></li>
								</ul>
							</div>
						</div>
					</section>