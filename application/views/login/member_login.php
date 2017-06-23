<?php 
header("content-type:text/html;charset=utf8");
function alert_msg($msg){ 
        echo "<script Language=javascript>"; 
        echo "window.alert('".$msg."')";
        header("Location:../hotel" );
        echo "</script>"; 
        
    }
//session_start();
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
      
         
        $query = "select * from member where mem_Identity = '$user' and mem_Pwd = '$psw'";
        $result = mysql_query($query);
            if (mysql_num_rows($result) == 1)
            {
                //會員資料的變數
                $row = mysql_fetch_assoc($result);

                $username=$row["mem_Name"];
                $identity=$row["mem_Identity"];
                $email=$row["mem_Email"];
                $phone=$row["mem_Phone"];
                $gender=$row["mem_Gender"];
                //建立會員SESSION           
                $_SESSION["identity"] = $_POST["identity"];
                setcookie("username",$username,time()+20*60);
                $msg="{$username}您好";
                alert_msg($msg);
                //header("Location:../hotel" );
            }
            else 
            {
                //如果开始用户名密码错误就提示失败。
                
                echo"帳號密碼錯誤<br>";
                echo'登入失敗！點擊此處 <a href="javascript:history.back(-1);">返回</a> 重试';
            } 
} 
            
?>