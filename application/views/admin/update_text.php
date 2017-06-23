<!-- 負責人：田安得 -->
<?php
if (isset($_SESSION["emp_identity"])) {

        $text_name = $_GET['id'];

        $sql = "SELECT * FROM text where text_name='$text_name'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);

        $content = str_replace('<br />', "", nl2br($row[3]));

        echo "<form name=\"form\" method=\"post\" action=\"update_text_finish\">";
        echo "<input type=\"hidden\" name=\"name\" value=\"$row[1]\"/>";  //text id
        if ($text_name != 'index_local_guide') {
                 echo "標題：<input type=\"text\" name=\"title\" value=\"$row[2]\" /> <br>";
        }
        if ($text_name == 'index_introduct') {
                echo "副標題：<input type=\"text\" name=\"subtitle\" value=\"$row[5]\" /> <br>";
        }
        echo "內容：<textarea name=\"content\" rows=\"10\" cols=\"50\"/ >".$content."</textarea>";
        echo " <br><input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}

?>