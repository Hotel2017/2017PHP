<!-- script >>> slider -->
<script src="assets/js/slider.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

				<!-- Content -->
					<section>
						<header class="main">
							<h1>最新消息</h1>
						</header>
						
						<!-- slider -->
						<?php
							echo "<span class=\"image main\">";
							echo "
								<div id=\"abgneBlock\" style =\"width: 100%; height: 80em;\"
							";
										for ($i=1; $i<3; $i++) { 
											echo "
												<li><a target=\"_blank\" href=\"#\"><img src=\"images/news/0$i.jpg\" /></a></li>
											";
										}
							echo "
									</ul>
								</div>
							</span>
							";
						?>
					</section>