<meta http-equiv="Content-Type" content="text/html" charset="utf-8" ;/>
<?php

$email = $_POST["email"];
$password = $_POST["password"];
$subject = $_POST["subject"];
$content = nl2br($_POST["content"]);

setcookie("Em", "$email", time()+60);
setcookie("content", "$content", time()+60);

if( isset($_POST["demo"]))
{
    if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["content"]))
    {
	
	//echo $email;

	include("PHPMailer/PHPMailerAutoload.php"); //匯入PHPMailer類別
	include("PHPMailer/class.phpmailer.php");
	       

	$mail= new PHPMailer(); //建立新物件        
	$mail->IsSMTP(); //設定使用SMTP方式寄信        
	$mail->SMTPAuth = true; //設定SMTP需要驗證        
	$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線   
	$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機        
	$mail->Port = 465;  //Gamil的SMTP主機的SMTP埠位為465埠。        
	$mail->CharSet = "utf8"; //設定郵件編碼        

	$mail->Username = $email; //設定驗證帳號        
	$mail->Password = $password; //設定驗證密碼        

	$mail->From = $email; //設定寄件者信箱        
	$mail->FromName = "客戶"; //設定寄件者姓名        

	$mail->Subject = $subject; //設定郵件標題        
	$mail->Body = $content; //設定郵件內容        
	$mail->IsHTML(true); //設定郵件內容為HTML        
	$mail->AddAddress("rockitchen80@gmail.com", "吾宿山"); //設定收件者郵件及名稱        

		if(!$mail->Send()) {        
		echo "Mailer Error: " . $mail->ErrorInfo;        
		} else {        
		echo "Message sent!";
		echo "<br>";
		echo "我們即將收到您的留言，我們會盡早回復您。";        
		}    

	echo '<meta http-equiv=REFRESH CONTENT=2;url=../contact>';
	}
	else{
		echo "帳號、密碼、內容缺一不可喔!";
		echo '<meta http-equiv=REFRESH CONTENT=3;url=../contact>';
	}
}
else{
	echo "你是機器人嗎?";
	echo '<meta http-equiv=REFRESH CONTENT=3;url=../contact>';
}
?>