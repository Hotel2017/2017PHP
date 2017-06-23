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

if(isset($_GET["id"])){
	$or_id=$_GET["id"];
	$rr_id=$_SESSION["rr_id"];
	$delete="DELETE FROM order_record WHERE or_ID='$or_id'";
	mysql_query($delete);
	$msg="訂餐刪除成功~";
	$redirect="success";
	alert_msg($msg,$redirect);
	}