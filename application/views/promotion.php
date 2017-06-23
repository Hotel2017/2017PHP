<!-- script >>> slider -->
<script src="../assets/js/slider.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

				<!-- Content -->
					<section>
						<header class="main">
							<h1>促銷優惠區</h1>
						</header>
						
						<!-- slider -->
						<?php
							echo "<span class=\"image main\">";
							echo "
								<div id=\"abgneBlock\">
									<ul class=\"list\">
							";
										for ($i=1; $i<5; $i++) { 
											echo "
												<li><a target=\"_blank\" href=\"#\"><img src=\"../images/news/promotion/0$i.jpg\" /></a></li>
											";
										}
							echo "
									</ul>
								</div>
							</span>
							";
						?>

						<div class="posts">
							<article>
								<a href="#" class="image"><img src="../images/news/promotion/01.jpg" alt="" /></a>
								<h3>歡慶畢業優惠</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</article>
							<article>
								<a href="#" class="image"><img src="../images/news/promotion/02.jpg" alt="" /></a>
								<h3>藝起遊玩趣</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</article>
							<article>
								<a href="#" class="image"><img src="../images/news/promotion/03.jpg" alt="" /></a>
								<h3>愛地球專案</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</article>
							<article>
								<a href="#" class="image"><img src="../images/news/promotion/04.jpg" alt="" /></a>
								<h3>春季，樂活SPA體驗</h3>
								<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
							</article>
						</div>

					</section>