<?php
header("content-type:text/html;charset=utf8");
date_default_timezone_set('Asia/Taipei');
$nowdate = date('Y-m-d-H-i-s');
// 隨機亂數
///////////////////////////////////////////////
///////////////////////////////////////////////
function getrand_id(){
    $id_len = 9;//字串長度
    $id = '';
    $word = '123456789';//字典檔 你可以將 數字 0 1 及字母 O L 排除
    $len = strlen($word);//取得字典檔長度
 
    for($i = 0; $i < $id_len; $i++){ //總共取 幾次
        $id .= $word[rand() % $len];//隨機取得一個字元
    }
    return $id;//回傳亂數帳號
}
//$rand = getrand_id();
///////////////////////////////////////////////
///////////////////////////////////////////////

$id=$_GET["id"];

$sql = "select *, SUM(rr_RoomCount) as RoomCount from room_record where rr_OrderNumber = '$id' group by rr_OrderNumber";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

$member = $row["rr_Member"];
$count = $row["RoomCount"];


$rand = getrand_id();
//Isert 發票
$insert = "INSERT INTO invoice(rr_OrderNumber,inv_ID,inv_Date,inv_RoomCount) VALUES('$id','$rand','$nowdate','$count')";
mysql_query($insert);

$update = "UPDATE room_record SET rr_finish ='1' WHERE rr_OrderNumber='$id'";
$updateresult = mysql_query($update);
header("Location:invoice?id=$id");

?>