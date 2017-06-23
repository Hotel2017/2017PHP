<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//include("../include.php");

        $id = $_SESSION['identity'];
        $sql = "SELECT * FROM member where mem_Identity='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_assoc($result);
        $username=$row["mem_Name"];
        $identity=$row["mem_Identity"];
        $email=$row["mem_Email"];
        $phone=$row["mem_Phone"];
        $gender=$row["mem_Gender"];
      
        
      echo "<form name=\"form\" method=\"post\" action=\"member_update_end\">";
      echo "*姓名：<input type=\"text\" name=\"username\" value= \"$username\"><br>";
      echo "*身分證字號：<input type=\"hidden\" name=\"identity\" value=\"$id\">{$id}<br>";
      if($gender == '男'){
        echo "  *稱謂 <input type=\"radio\" id=\"demo-priority-man\" value='男' name=\"gender\" checked>
        <label for=\"demo-priority-man\">男</label>";
      echo "   <input type=\"radio\" id=\"demo-priority-weman\" value='女' name=\"gender\">
        <label for=\"demo-priority-weman\">女</label><br>";
      }
      else{
        echo "  *稱謂 <input type=\"radio\" id=\"demo-priority-man\" value='男' name=\"gender\" >
        <label for=\"demo-priority-man\">男</label>";
      echo "   <input type=\"radio\" id=\"demo-priority-weman\" value='女' name=\"gender\" checked>
        <label for=\"demo-priority-weman\">女</label><br>";
      }

      
      echo "*E-Mail:<input type=\"text\" name=\"email\" value=\"$email\" > <br>";
      echo "*連絡電話：<input type=\"text\" name=\"phone\" value=\"$phone\"><br>";
      echo "<input type=\"submit\" name=\"Submit\" value=\"儲存資料\" />";
      echo "</form>"; 
?>