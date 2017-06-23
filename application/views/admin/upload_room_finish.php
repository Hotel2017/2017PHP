<?php
if(isset($_SESSION["emp_identity"])){	
	$room_Name=$_POST["room_Name"];
	$room_Level=$_POST["room_Level"];
	$room_Price=$_POST["room_Price"];
	$room_Size=$_POST["room_Size"];
	$room_Intro=$_POST["room_Intro"];
	$room_Quantity=$_POST["room_Quantity"];
	if ($room_Size == '雙人房') {
		$room_folder = '25';
		$a = '2_1';
		$b = '2_2';
		$c = '2_3';
		$d = '2_4';
	}
	else{
		$room_folder = '45';
		$a = '4_1';
		$b = '4_2';
		$c = '4_3';
		$d = '4_4';
	}
	$update="INSERT INTO room (room_Name,room_Level,room_Price,room_Size,room_Intro,room_Quantity,room_Img1,room_Img2,room_Img3,room_Img4,room_Img5) VALUE('$room_Name','$room_Level','$room_Price','$room_Size','$room_Intro','$room_Quantity','$room_folder','$a','$b','$c','$d')";
	mysql_query($update);
	header("location:http://140.127.218.151/reservation");

	// echo $error;
	// for ($i=1; $i<5; $i++) { 
	// 	if ($i == 1) {
	// 		$file = $a;
	// 	}
	// 	elseif ($i == 2) {
	// 		$file = $b;
	// 	}
	// 	elseif ($i == 3) {
	// 		$file = $c;
	// 	}
	// 	elseif ($i == 4) {
	// 		$file = $d;
	// 	}
	// 	echo "<div class = 'update_img'>";
	// 	echo "<form method=\"post\" action=\"do_upload\"  enctype=\"multipart/form-data\">
	//         <input type=\"hidden\" name=\"room_img1\" value=\"$room_folder\" >
	//         <input type=\"hidden\" name=\"room_img2\" value=\"$file\" >
	//         <br><br>
	//         <h3>新增之餐點圖片：</h3>
	//        	<input type=\"file\" name=\"userfile\" size=\"20\" />
	//         <br>
	//         <input type=\"submit\" value=\"upload\" />

	//         </form>";
	//     echo "</div>";
	// }
       
}
?>