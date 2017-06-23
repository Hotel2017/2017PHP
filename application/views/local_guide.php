<script src="assets/js/slider.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Content -->
		<section>
			<header class="main">
				<h1>在地指南</h1>
			</header>
			
			<!-- slider -->
			<?php
				echo "<span class=\"image main\">";
				echo "
					<div id=\"abgneBlock\">
						<ul class=\"list\">
				";
				echo "
					<li><a target=\"_blank\" href=\"#\"><img src=\"images/summer.jpg\" /></a></li>
					<li><a target=\"_blank\" href=\"#\"><img src=\"images/winter.jpg\" /></a></li>
				";
				echo "
						</ul>
					</div>
				</span>
				";
			?>
	
	<div style="margin: 0 10% 0 10%">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6289.121830827492!2d120.88452312019263!3d23.481961425008357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ef046f98c50ab57!2z5o6S6Zuy55m75bGx5pyN5YuZ5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1495778891758" width="100%%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			<?php
			$sql = "SELECT * FROM text where text_name='index_local_guide'";
	        $result = mysql_query($sql);
	        $row = mysql_fetch_row($result);
			echo "<h3>$row[3]</h3>";
			if (isset($_SESSION["emp_identity"])) {
					echo "<li class=\"admin\"><a href=\"admin/update_text?id=index_local_guide\" class=\"button special\">更改</a></li>";
				}
			?>
	</div>
</section>