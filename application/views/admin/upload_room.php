<!-- 負責人：田安得 -->
<?php
  if(isset($_SESSION["emp_identity"])){
?>
  <h1>員工新增客房</h1>
    <form action='upload_room_finish' method=post>
      <h3>新增之客房名稱：</h3>
        <input type='text' name='room_Name'><br>
      <h3>新增之客房介紹：</h3>
        <textarea row='10' cols='20' name='room_Intro'></textarea><br>
      <h3>新增之客房價格：</h3>
        <input type="number" onkeyup="value=value.replace(/[^\d]/g,'') "
  　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" NAME="room_Price">
  <h3>新增之客房等級：</h3>
        <input type="number" onkeyup="value=value.replace(/[^\d]/g,'') "
  　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" NAME="room_Level">

    <h3>新增之客房數量：</h3>
        <input type="number" onkeyup="value=value.replace(/[^\d]/g,'') "
  　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" NAME="room_Quantity">
      <h3>新增之客房人數：</h3>
        <select name='room_Size'>
          <option>雙人房</option>
          <option>四人房</option>
        </select>

      <input type="submit" value="送出">
    </form>
  <?php
}
?>