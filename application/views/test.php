<script src="assets/js/slider.js"></script>
<?php
	$sql = "SELECT * FROM room where room_ID='1' ";
    $result = mysql_query($sql);
    $row = mysql_fetch_row($result);

    echo "<header class=\"main\">
					<h1>住房資訊</h1>
				</header>";
			echo "
				<div id=\"abgneBlock\">
					<ul class=\"list\">
			";
						for ($i=8; $i<12; $i++) { 
							echo "
						<li><a target=\"_blank\" href=\"#\"><img src=\"images/room/$row[7]/$row[$i].jpg\" /></a></li>
							";
						}
			echo "
					</ul>
				</div>
			";
			echo "<header>
					<h2>$row[1]</h2>
				</header>";
			echo "<p>$row[5]</p>";
			// <span class=\"image main\"><a href=\"#\" class=\"image\"><img src=\"images/room/$row[7]/$row[8].jpg\" /></a></span>
?>

	
