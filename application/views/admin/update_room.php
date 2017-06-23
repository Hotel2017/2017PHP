<!-- 負責人：田安得 -->
<?php
if (isset($_SESSION["emp_identity"])) {

  $ID = $_GET['id'];
  $sql = "SELECT * FROM room where room_ID='$ID'";
  $result = mysql_query($sql);
  $row = mysql_fetch_row($result);
  $result_area = str_replace(chr(13).chr(10), "<br>", $row[5]);
  $remarks = str_replace('<br />', "", nl2br($row[12]));
  
  echo "<form name=\"form\" method=\"post\" action=\"update_room_finish\">";
  echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\"/>";
  echo "標題：<input type=\"text\" name=\"room_Name\" value=\"$row[1]\" /> <br>";
  echo "介紹：<textarea name=\"room_Intro\" rows=\"10\" cols=\"20\"/>$result_area</textarea>";
  echo "資訊：<textarea name=\"room_Remarks\" rows=\"15\" cols=\"20\"/>$remarks</textarea>";
  echo " <br><input type=\"submit\" name=\"button\" value=\"確定\" />";
  echo "</form>";


  echo $error;
  for ($i=8; $i<12; $i++) { 
    echo "<div class = 'update_img'>";
    echo "<form method=\"post\" action=\"do_upload\"  enctype=\"multipart/form-data\">";
    echo "
      <input type=\"hidden\" name=\"id\" value=\"$ID\">
      <input type=\"hidden\" name=\"room_img1\" value=\"$row[7]\">
      <input type=\"hidden\" name=\"room_img2\" value=\"$row[$i]\">
      <img src=\"../images/room/$row[7]/$row[$i].jpg\" /><br><br>
      <input type=\"file\" name=\"userfile\" size=\"20\" />
      <br>
      <input type=\"submit\" value=\"upload\" />

      </form>
    ";
    //row[7]是紀錄照片的資料夾，row[8]~row[11]是四張照片的檔名
    echo "</div>";
  }
}
?>