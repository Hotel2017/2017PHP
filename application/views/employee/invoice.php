<br>
<div class="box">
  <h2>發票明細</h2>
  <?php




    $id=$_GET["id"];

    //訂單資料
    $test = "SELECT *, sum(rr_RoomCount) as roomCount FROM room_record where rr_OrderNumber = '$id' group  by rr_OrderNumber";
    $testResult = mysql_query($test);
    $testRow = mysql_fetch_assoc($testResult);

    //房間資料
    $findRoom = "SELECT * FROM room where room_ID = '{$testRow['room_ID']}'";
    $findRoomResult = mysql_query($findRoom);
    $findRoomRow = mysql_fetch_assoc($findRoomResult);

    //顧客資料
    $findCustomer = "SELECT * FROM member where mem_Identity = '{$testRow["rr_Member"]}'";
    $findCustomerResult = mysql_query($findCustomer);
    $findCustomerRow = mysql_fetch_assoc($findCustomerResult);

    //發票
    $invoice = "select * from invoice where rr_OrderNumber = '$id'";
    $invoiceResult = mysql_query($invoice);
    $invoiceRow = mysql_fetch_assoc($invoiceResult);

    //計算總房價
    $sql_room = "select room_Price from room where room_ID = {$testRow['room_ID']}";
    $result_room = mysql_query($sql_room);
    $row_room = mysql_fetch_assoc($result_room);
    $totalPrice = $invoiceRow["inv_RoomCount"] * $row_room['room_Price'];

    echo "發票編號:".$invoiceRow["inv_ID"]."<br>";
    echo "訂單編號:".$testRow["rr_OrderNumber"]."<br>";
    echo "會員號:".$testRow["rr_Member"]."<br>";
    echo "姓名:".$findCustomerRow["mem_Name"]."<br>";
    echo "房間名稱:".$findRoomRow["room_Name"]."<br>";
    echo "房型:".$findRoomRow["room_Size"]."<br>";
    echo "房數:".$testRow["roomCount"]."<br>";
    echo "入住日期:".$testRow["rr_Checkin"]."<br>";
    echo "退住日期:".$testRow["rr_Checkout"]."<br>";
    echo "訂房總價:$".$totalPrice."<br><br>";



    $sql="select rr_OrderNumber,or_ID,dish.d_Name,or_Quantity,dish.d_Price,rr_RoomNumber,or_Quantity*dish.d_Price as price,rr_Checkin,rr_Checkout from inv_total,dish
    where inv_total.rr_OrderNumber='$id' and inv_total.d_ID=dish.d_ID order by rr_RoomNumber";



     $result = mysql_query($sql);
    if($result === FALSE) 
    { 
      echo"fail"; // TODO: better error handling
    }
           
    echo "<table border=1>";
    echo "<thead>
            <tr>
              <th>房號</th>
              <th>菜名</th>
              <th>數量</th>
              <th>單價</th>
              <th>單項總價</th>
            </tr>
          </thead>";
    while($row = mysql_fetch_assoc($result))
    { 
        echo "<tbody>
                <tr>
                  <td>".$row["rr_RoomNumber"]."</td>
                  <td>".$row["d_Name"]."</td>
                  <td>".$row["or_Quantity"]."</td>
                  <td>".$row["d_Price"]."</td>
                  <td>".$row["price"]."</td>
                </tr>
              </tbody>";

    }
    $sql2= "select total from price_total where Number='$id' limit 1";
    $result2 = mysql_query($sql2);
    $row2 = mysql_fetch_assoc($result2);
    $foodprice = "0";
    $foodprice += $row2["total"];
    echo"<tfoot>
            <tr>
              <td colspan=\"4\">總價: </td>

              <td>$".$foodprice."</td>
            </tr>
          </tfoot>
        ";
    echo "</table>";

    echo "<br>";
    echo "<a href='view_record'>回上頁</a>";

  ?>
</div>