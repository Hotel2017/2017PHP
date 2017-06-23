<!-- 負責人：田安得 -->
<?php
  if(isset($_SESSION["emp_identity"])){
?>
  <h1>員工新增菜單餐點資料</h1>
   	<form action='upload_dish_finish' method=post>
   		<h3>新增之餐點名稱：</h3>
    		<input type='text' name='dish_name'><br>
   		<h3>新增之餐點介紹：</h3>
    		<textarea row='4' cols='20' name='dish_intro'></textarea><br>
    	<h3>新增之餐點價格：</h3>
    		<input type="number" onkeyup="value=value.replace(/[^\d]/g,'') "
  　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" NAME="dish_price">

		<h3>新增之餐點庫存：</h3>
    		<input type="number" onkeyup="value=value.replace(/[^\d]/g,'') "
  　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" NAME="dish_inv">
    	<h3>新增之餐點類型：</h3>
		    <select name='dish_ew'>
		     	<option>中餐</option>
		     	<option>西餐</option>
		    </select>

      <input type="submit" value="送出">
    </form>
  <?php
}
?>