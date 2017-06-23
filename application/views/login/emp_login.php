<?php 
//创建session
if(!isset($_POST['submit']))
{  
    //如果强行进入提示
    echo "非法登入!";
    header("Refresh:2;url=login");

}
else
{
    //設定帳號密碼變數    
    $user = $_POST["identity"];  
    $psw = $_POST["email"];
      
         
        $query = "select * from employee where emp_Identity = '$user' and emp_Pwd = '$psw'";
        $result = mysql_query($query);
            if (mysql_num_rows($result) == 1)
            {
                //會員資料的變數
                $row = mysql_fetch_assoc($result);

                $username=$row["emp_Name"];
                $identity=$row["emp_Identity"];
                $email=$row["emp_Email"];
                $phone=$row["emp_Phone"];
                $gender=$row["emp_Gender"];
                
                //建立會員SESSION           
                $_SESSION["emp_identity"] = $_POST["identity"]; 
                header("Location:../hotel" );
            }
            else 
            {
                //如果开始用户名密码错误就提示失败。
                
                echo"帳號密碼錯誤<br>";
                echo'登入失敗！點擊此處 <a href="javascript:history.back(-1);">返回</a> 重试';
            } 
} 
            
?>