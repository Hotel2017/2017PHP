<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php

//include("../include.php");

$sql = "select * from employee where emp_Identity ='S123456789'";
$result = mysql_query($sql);
$pwd = mysql_fetch_assoc($result);

if($_POST['oldPwd'] == $pwd['emp_Pwd'])
{
	
	if($_POST['newPwd'] == $_POST['newCheckPwd'])
	{
		$update = "UPDATE employee SET emp_Pwd = '{$_POST['newPwd']}' WHERE emp_Identity = 'S123456789'";
		mysql_query($update);
		echo "密碼變更完成，下次登入請記得使用新密碼喔。";
		header("Refresh: 2; url=emp_pwd");
	}else
	{
		echo "密碼不一致";
		header("Refresh: 2; url=emp_pwd");
	}
	
}else
{
	echo "舊密碼錯誤";
	header("Refresh: 2; url=emp_pwd");

}


?>
