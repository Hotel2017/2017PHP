<?php
include("include.php");
$sql1 ="select SUM(or_Quantity) as total from order_record where d_ID = '1' ";
$result1 = mysql_query($sql1);
$row1 = mysql_fetch_assoc($result1);
$quantity1="";
$quantity1 += $row1["total"];

$sql2 ="select SUM(or_Quantity) as total from order_record where d_ID = '2' ";
$result2 = mysql_query($sql2);
$row2 = mysql_fetch_assoc($result2);
$quantity2="";
$quantity2 += $row2["total"];

$sql3 ="select SUM(or_Quantity) as total from order_record where d_ID = '3' ";
$result3 = mysql_query($sql3);
$row3 = mysql_fetch_assoc($result3);
$quantity3="";
$quantity3 += $row3["total"];

$sql4 ="select SUM(or_Quantity) as total from order_record where d_ID = '4' ";
$result4 = mysql_query($sql4);
$row4 = mysql_fetch_assoc($result4);
$quantity4="";
$quantity4 += $row4["total"];

$sql5 ="select SUM(or_Quantity) as total from order_record where d_ID = '5' ";
$result5 = mysql_query($sql5);
$row5 = mysql_fetch_assoc($result5);
$quantity5="";
$quantity5 += $row5["total"];

$sql6 ="select SUM(or_Quantity) as total from order_record where d_ID = '6' ";
$result6 = mysql_query($sql6);
$row6 = mysql_fetch_assoc($result6);
$quantity6="";
$quantity6 += $row6["total"];

$sql7 ="select SUM(or_Quantity) as total from order_record where d_ID = '7' ";
$result7 = mysql_query($sql7);
$row7 = mysql_fetch_assoc($result7);
$quantity7="";
$quantity7 += $row7["total"];

$sql8 ="select SUM(or_Quantity) as total from order_record where d_ID = '8' ";
$result8 = mysql_query($sql8);
$row8 = mysql_fetch_assoc($result8);
$quantity8="";
$quantity8 += $row8["total"];

?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['項目', '銷售量'],
          ['手抓餅', <?php echo $quantity1;?>],
          ['滷肉飯', <?php echo $quantity2;?>],
          ['咖哩飯', <?php echo $quantity3;?>],
          ['小籠包', <?php echo $quantity4;?>],
          ['法式煎鹅肝', <?php echo $quantity5;?>],
          ['番茄肉酱意大利面', <?php echo $quantity6;?>],
          ['菲力牛排', <?php echo $quantity7;?>],
          ['蘑菇濃湯', <?php echo $quantity8;?>]
        
        ]);

        var options = {
          chart: {
            title: '餐點銷售圖',
            subtitle: '6月',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 100%; height: 500px;"></div>
  </body>
</html>