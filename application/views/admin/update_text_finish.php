<!-- 負責人：田安得 -->
<?php
if (isset($_SESSION["emp_identity"])) {
        
        $name = $_POST['name'];
        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $content = $_POST["content"];
    
        $sql = "UPDATE text set text_title='$title',text_subtitle='$subtitle', text_content='$content' where text_name='$name'";
        if(mysql_query($sql))
        {
                echo '<h2>修改成功!<h2>';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=../hotel>';
        }
        else
        {
                echo '<h2>修改失敗!<h2>!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=update_text>';
        }
}

?>