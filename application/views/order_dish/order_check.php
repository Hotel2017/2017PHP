

<?php

function alert_msg($msg,$redirect){ 
	    echo "<SCRIPT Language=javascript>"; 
	    echo "window.alert('".$msg."')"; 
	    echo "</SCRIPT>"; 
	    echo "<script language=\"javascript\">"; 
	    echo "location.href='".$redirect."'"; 
	    echo "</script>"; 
	    return; 
	}

if(isset($_POST["rr_id"])&&isset($_POST["index"])&& $_POST["getdate"]!=null&& $_POST["gettime"]!=null){
		$i=0;
		$index=$_POST["index"];
		//echo $index;
		while($i<$index){
		$rr_id=$_POST["rr_id"];
		//$dish=$_POST["dish_$i"];
		$quantity=$_POST["quantity_$i"];
		$date=$_POST["getdate"];
		$time=$_POST["gettime"];
		if($quantity!=0){
			$get_dish="SELECT d_ID FROM dish where d_ID='$i'+1 ";
			$dishid=mysql_query($get_dish);
			$dishrow=mysql_fetch_assoc($dishid);
			$dish=$dishrow["d_ID"];
			$order_action="INSERT INTO order_record (rr_ID,d_ID,or_Quantity,or_Date,or_Time) VALUE('$rr_id','$dish','$quantity','$date','$time')";
			mysql_query($order_action);
		
		}
			$i++;
		}
		$_SESSION["rr_id"]=$rr_id;
		//echo $rr_id;
		header("Location:success");	
	}
	else{
		$msg="資料未填寫完整，請重新輸入!";
		$redirect="http://140.127.218.151/order_dish";
		alert_msg($msg,$redirect);
	}