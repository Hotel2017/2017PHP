<?php
if(isset($_SESSION["emp_identity"])){	
	$d_name=$_POST["dish_name"];
	$d_intro=$_POST["dish_intro"];
	$d_price=$_POST["dish_price"];
	$d_ew=$_POST["dish_ew"];
	$d_inv=$_POST["dish_inv"];
	if ($d_ew == '西餐') {
		$d_img_folder = 'western';
	}
	else{
		$d_img_folder = 'chinese';
	}
	$update="INSERT INTO dish (d_Name,d_Intro,d_Price,d_EW,d_Inventory,d_Img1,d_Img2) VALUE('$d_name','$d_intro','$d_price','$d_ew','$d_inv','$d_img_folder','$d_name')";
	mysql_query($update);

	echo $error;
	echo "<form method=\"post\" action=\"do_upload_dish\"  enctype=\"multipart/form-data\">
        類別：$d_img_folder <br>
        食物名稱：$d_name <br>
        <input type=\"hidden\" name=\"d_img_folder\" value=\"$d_img_folder\" >
        <input type=\"hidden\" name=\"d_name\" value=\"$d_name\" >
        <br><br>
        <h3>新增之餐點圖片：</h3>
       	<input type=\"file\" name=\"userfile\" size=\"20\" />
        <br>
        <input type=\"submit\" value=\"upload\" />

        </form>   ";
}