<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//include("../include.php");

        $id = $_SESSION['emp_identity'];
        //$id = $_GET['id'];
        $sql = "SELECT * FROM employee where emp_Identity='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_assoc($result);
        $username=$row["emp_Name"];
        $identity=$row["emp_Identity"];
        $email=$row["emp_Email"];
        $phone=$row["emp_Phone"];
        $gender=$row["emp_Gender"];
      
        
      echo "<form name=\"form\" method=\"post\" action=\"emp_update_end\">";
      echo "*姓名：<input type=\"text\" name=\"username\" value= \"$username\"><br>";
      echo "*身分證字號：<input type=\"hidden\" name=\"identity\" value=\"$identity\" >$identity<br>";
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