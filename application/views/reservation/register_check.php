<?php
header("content-type:text/html;charset=utf8");


// 隨機亂數
///////////////////////////////////////////////
///////////////////////////////////////////////
function getrand_id(){
    $id_len = 6;//字串長度
    $id = '';
    $word = 'abcdefghijkmnpqrstuvwxyz23456789';//字典檔 你可以將 數字 0 1 及字母 O L 排除
    $len = strlen($word);//取得字典檔長度
 
    for($i = 0; $i < $id_len; $i++){ //總共取 幾次
        $id .= $word[rand() % $len];//隨機取得一個字元
    }
    return $id;//回傳亂數帳號
}
$rand = getrand_id();
///////////////////////////////////////////////
///////////////////////////////////////////////

if(empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["identity"]) || empty($_POST["gender"])  || empty($_POST["phone"]))
{
    echo "請輸入完整資料";
    header("Refresh:2;url=filldata");
}
else
{
    //取得客戶資料值
    date_default_timezone_set('Asia/Taipei');
    $nowdate = date('Y-m-d-H-i-s');
    $username = $_POST["username"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $identity =$_POST["identity"];

    //取得cookie變數
    $inDate = $_COOKIE["inDate"];
    $outDate = $_COOKIE["outDate"];
    $quantity = $_COOKIE["quantity"];
    $totalPrice = $_COOKIE["totalPrice"];
    $room_ID =  $_COOKIE["room_ID"];
    //判斷Email是否正確
    if(preg_match("/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i",$email))
    {
      //判斷身分證格式
      $identity = strtoupper($identity);
      if(preg_match("/^[a-zA-Z][1-2][0-9]{8}+$/",$identity))
      {
        //比較身分證是否重複
        $select = "select * from member where mem_Identity = '$identity'";
        $result = mysql_query($select);
        $total = mysql_num_rows($result);
        if( $total >=1)
        {
            //用户名已存在，显示提示信息
            echo "account exist";
            header("Refresh:2;url=fillData");

        }
        else
        {
            $rand = getrand_id();
            //echo "register success";
            //Isert 會員資料
            $insert = "INSERT INTO member(mem_Email,mem_Name,mem_Pwd,mem_Identity,mem_Gender,mem_Phone,mem_Date) VALUES('$email','$username','$email','$identity','$gender','$phone','$nowdate')";
            mysql_query($insert);



            //Insert 訂房紀錄
            $select = "select * from room_record where room_ID = '$room_ID' and rr_Checkin <='$inDate' having rr_Checkout >'$inDate'";
            $result = mysql_query($select);
            $check = mysql_num_rows($result);
            if($check >=1)
            {
                
                $havingNumber ="";
                while($row = mysql_fetch_assoc($result)){
                    $havingNumber.= "'{$row["rr_RoomNumber"]}',";
                    //echo $havingNumber;
                }
                //去除最後一筆的逗號
                $havingNumber = trim($havingNumber,',');
                
                //房號
                $selectRoomNumber = "select * from room_number where rn_RoomID = '$room_ID' and rn_RoomNumber not in(".$havingNumber.") limit $quantity";
                $roomnumber = mysql_query($selectRoomNumber);
                

                $insert = "INSERT INTO room_record(room_ID,rr_DATE,rr_RoomCount,rr_Checkin,rr_Checkout,rr_State,rr_VisaCheck,rr_RoomNumber,rr_Member,rr_OrderNumber) VALUES";

                while($available = mysql_fetch_assoc($roomnumber))
                {
                    $insert .="('$room_ID','$nowdate','1','$inDate','$outDate','1','0','{$available["rn_RoomNumber"]}','$identity','$rand'),";
                }
                $insert = trim($insert,',');
                mysql_query($insert);

            }
            else
            {
                //選擇的日期目前無訂房筆數
                //房號
                $selectRoomNumber = "select * from room_number where rn_RoomID = '$room_ID'  limit $quantity";
                $roomnumber = mysql_query($selectRoomNumber);

                $insert = "INSERT INTO room_record(room_ID,rr_DATE,rr_RoomCount,rr_Checkin,rr_Checkout,rr_State,rr_VisaCheck,rr_RoomNumber,rr_Member,rr_OrderNumber) VALUES";

                while($available = mysql_fetch_assoc($roomnumber))
                {
                    $insert .="('$room_ID','$nowdate','1','$inDate','$outDate','1','0','{$available["rn_RoomNumber"]}','$identity','$rand'),";
                }
                $insert = trim($insert,',');
                mysql_query($insert);
            }
            //header("Refresh:2;url=booking_showResult.php");
            header("Location:booking_show_result");
            
        } 
      }
      else
      {
        echo "身分證格式錯誤";
        header("Refresh:2;url=filldata");
      }
    }
    else
    {
    	echo"email格式錯誤";
        header("Refresh:2;url=filldata");
    }  
}

?>
