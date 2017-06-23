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

		
			//$inDate = $_COOKIE["inDate"];
			//$outDate = $_COOKIE["outDate"];
			//$quantity = $_COOKIE["quantity"];
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
	?>
</section>