				</div>  <!-- inner(header) -->
			</div>	<!-- main -->

	<!-- Sidebar -->
			<div id="sidebar">
				<div class="inner">

					<!-- Search -->
						<!-- <section id="search" class="alt">
							<form method="post" action="#">
								<input type="text" name="query" id="query" placeholder="Search" />
							</form>
						</section> -->

					<!-- Menu -->
						<nav id="menu">
							<header class="major">
								<h2>Menu</h2>
							</header>
							<ul>
								<li><a href="http://140.127.218.151/">首頁</a></li>
								<li>
									<span class="opener">NEWS</span>
									<ul>
										<li><a href="http://140.127.218.151/news/promotion">促銷活動</a></li>
										<li><a href="http://140.127.218.151/news">新聞特輯</a></li>
									</ul>
								</li>

								<li><a href="http://140.127.218.151/reservation">線上訂房</a></li>
								<?php
									if(isset($_SESSION["identity"]))
									{
									echo"<li><a href='http://140.127.218.151/order_dish'>客房點餐服務</a></li>";
									}
								?>
								<?php 							
									// echo "
									// <li>
									// 	<span class=\"opener\">會員專區</span>
									// 	<ul>
									// ";
									if(isset($_SESSION["identity"]))
									{
										echo "
										<li>
										<span class=\"opener\">會員專區</span>
										<ul>
										<li><a href=\"http://140.127.218.151/customer/member_update\">會員基本資料</a></li>
										<li><a href=\"http://140.127.218.151/customer/mem_pwd\">修改密碼</a></li>
										<li><a href=\"http://140.127.218.151/reservation\">訂房</a></li>
										<li><a href=\"http://140.127.218.151/reservation/show_record\">訂房紀錄</a></li>
										";
									}
									else if(isset($_SESSION["emp_identity"]))
									{
										echo "
										<li>
										<span class=\"opener\">管理員專區</span>
										<ul>
										<li><a href=\"http://140.127.218.151/employee/emp_update\">管理員基本資料</a></li>
										<li><a href=\"http://140.127.218.151/employee/emp_pwd\">修改密碼</a></li>
										<li><a href=\"http://140.127.218.151/employee/view_record\">訂房作業</a></li>
										<li><a href=\"http://140.127.218.151/admin/upload_dish\">餐點新增</a></li>
										<li><a href=\"http://140.127.218.151/admin/delete_dish\">餐點刪除</a></li>
										";
									}
									else
									{
										echo "
										<li>
										<span class=\"opener\">會員專區</span>
										<ul>";

										echo "請先登入";
									}
									echo "
										</ul>
									</li>
									";
								?>

								<li><a href="http://140.127.218.151/local_guide">在地指南</a></li>

								<li><a href="http://140.127.218.151/contact">連絡我們</a></li>

								<?php 	
									if(isset($_SESSION["emp_identity"]))
									{						
									echo "
									<li>
										<span class=\"opener\">數據分析</span>
										<ul>
											<li><a href=\"http://140.127.218.151/employee/statistics_A\">房型統計</a></li>
											<li><a href=\"http://140.127.218.151/employee/statistics_B\">餐點統計</a></li>
											<li><a href=\"http://140.127.218.151/employee/statistics_C\">月報表</a></li>

										</ul>
									</li>

									<li><a href=\"http://140.127.218.151/phpmyadmin\">MySQL 資料庫</a></li>
									";
									}
								?>

							</ul>
						</nav>

					<!-- Section -->
						
						<section>
						<?php 							
							if(isset($_SESSION["identity"]))
							{
								// $username = $_COOKIE['username'];
								// echo $_COOKIE['username'];
								echo '<h2><a href="http://140.127.218.151/login/member_logout">會員登出</a>！</h2>'; 
							}
							else if(isset($_SESSION["emp_identity"]))
							{
								echo '<h2><a href="http://140.127.218.151/login/emp_logout">員工登出</a>！</h2>';
							}else
							{
						?>
							<header class="major">
								<h2>會員登入</h2>
							</header>
							<div class="mini-posts">
								<article>
									<form action="http://140.127.218.151/login/member_login" method="post">
										<input type="text" name="identity" placeholder="預設帳號為身分證(字母大寫)">
										<input type="password" name="email" placeholder="預設密碼為信箱">
										<input type="submit" name="submit" value="登入">
										<a href="http://140.127.218.151/login/emp">員工登入</a>
									</form>								
								</article>
								
							</div>
						<?php
							}
						?>
						</section>
						

					<!-- Section -->
						<section>
							<header class="major">
								<h2><a href="http://140.127.218.151/contact">聯絡方式</a></h2>
							</header>
							<p>親愛的吾宿山網友您好，如果您想更了解吾宿山，或是其他有任何疑問，歡迎您線上留言給我們，收到您的訊息後，我們盡快請專人回覆您的問題。謝謝您!</p>
							<ul class="contact">
								<li class="fa-envelope-o">mountain@gmail.com</li>
								<li class="fa-phone">0912-345-678</li>
								<li class="fa-home">嘉義縣阿里山鄉中山村吾宿山路1號</li>
							</ul>
						</section>
