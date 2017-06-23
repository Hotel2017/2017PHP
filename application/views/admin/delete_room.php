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
	$find_room="select *from room";
	$result = mysql_query($find_room);
	echo "
		<h1>客房刪除</h1>
			<div class=\"table-wrapper\">
				<table class=\"alt\" style=\"\">
					<thead>
						<tr>
							<th>客房名稱</th>
							<th>價格</th>
							<th>規格</th>
							<th>照片</th>
							<th>刪除</th>
						</tr>
					</thead>
					<tbody>
		";
	while($row=mysql_fetch_assoc($result))
	{
				$room_ID=$row['room_ID'];
				echo "
					<tr>
						<td>".$row['room_Name']."</td>
						<td>".$row['room_Price']."</td>
						<td>".$row['room_Size']."</td>
						<td><img style=\"max-width: 20em; max-height: 20em;\" src=\"../images/room/".$row['room_Img1']."/".$row['room_Img2'].".jpg\" /></td>
						<td><a href='delete_room?id=".$room_ID."'>刪除</a></td>
					</tr>	
					";
	}
	
	echo "</table></div>";
if(isset($_GET["id"])){
	$room_id=$_GET["id"];
	$delete="DELETE FROM room WHERE room_ID='$room_id'";
	mysql_query($delete);
	$msg="客房刪除成功~";
	$redirect="delete_room";
	alert_msg($msg,$redirect);
	}
}

?>
