<!-- 負責人：田安得 -->
<?php
if (isset($_SESSION["emp_identity"])) {

        //上傳資料     
        $id = $_POST['id'];
        $room_Name = $_POST['room_Name'];
        $room_Intro = nl2br($_POST["room_Intro"]);
        $remarks = $_POST['room_Remarks'];
        
        $sql = "UPDATE room set room_Name='$room_Name', room_Intro='$room_Intro',room_Remarks = '$remarks' where room_ID='$id'";

        if(mysql_query($sql))
        {
                echo '<h2>修改成功!<h2>';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=../hotel>';
        }
        else
        {
                echo '<h2>修改失敗!<h2>';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=update_room>';
        }
}

?>