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



if(isset($_SESSION["emp_identity"])){
	$find_dish="select *from dish";
	$result = mysql_query($find_dish);
	echo "
		<h1>菜單刪除</h1>
			<div class=\"table-wrapper\">
				<table class=\"alt\">
					<thead>
						<tr>
							<th>餐點名稱</th>
							<th>餐點屬性</th>
							<th>單價</th>
							<th>餐點描述</th>
							<th>餐點存貨</th>
							<th>刪除</th>
						</tr>
					</thead>
					<tbody>
		";
	$i = 1;
	while($row=mysql_fetch_assoc($result))
	{
				$d_id=$row['d_ID'];
				echo "
					<tr class=\"open_img\">
						<td class=\"open_pic$i\">".$row['d_Name']."</td>
						<td>".$row['d_EW']."</td>
						<td>".$row['d_Price']."</td>	
						<td>".$row["d_Intro"]."</td>
						<td>".$row["d_Inventory"]."</td>
						<td><a href='delete_dish?id=".$d_id."'>刪除</a></td>
					</tr>	
					";
	
		$i=$i+1;
					
	
	}
	
	echo "</table></div>";
if(isset($_GET["id"])){
	$d_id=$_GET["id"];
	$delete="DELETE FROM dish WHERE d_ID='$d_id'";
	mysql_query($delete);
	$msg="訂餐刪除成功~";
	$redirect="delete_dish";
	alert_msg($msg,$redirect);
	}
}

?>
