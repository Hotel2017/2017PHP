<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php

//include("../include.php");
$id = $_SESSION['identity'];
$sql = "select * from member where mem_Identity ='$id'";
$result = mysql_query($sql);
$pwd = mysql_fetch_assoc($result);

if($_POST['oldPwd'] == $pwd['mem_Pwd'])
{
	
	if($_POST['newPwd'] == $_POST['newCheckPwd'])
	{
		$update = "UPDATE member SET mem_Pwd = '{$_POST['newPwd']}' WHERE mem_Identity = '$id'";
		mysql_query($update);
		echo "密碼變更完成，下次登入請記得使用新密碼喔。";
		header("Refresh: 2; url=mem_pwd");
	}else
	{
		echo "密碼不一致";
		header("Refresh: 2; url=mem_pwd");
	}
	
}else
{
	echo "舊密碼錯誤";
	header("Refresh: 2; url=mem_pwd");

}


?>
