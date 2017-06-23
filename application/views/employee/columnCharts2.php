<?php
include("include.php");
//id=1
// for ($i=6; $i <10 ; $i++) { 
//   $sql1_.$i = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-0".$i."-01' and '2017-0".$i."-31' and room_ID ='1'";
//   $row1_.$i = mysql_fetch_assoc(mysql_query($sql1_.$i));
//   $room1_.$i = "";
//   $room1_.$i += $row1_.$i.['num'];
// }
// echo $room1_6;


//id=1
$sql1_6 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-06-01' and '2017-06-30' and room_ID ='1'";
$row1_6 = mysql_fetch_assoc(mysql_query($sql1_6));
$room1_6 = "";
$room1_6 += $row1_6['num'];

$sql1_7 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-07-01' and '2017-07-31' and room_ID ='1'";
$row1_7 = mysql_fetch_assoc(mysql_query($sql1_7));
$room1_7 = "";
$room1_7 += $row1_7['num'];

$sql1_8 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-08-01' and '2017-08-30' and room_ID ='1'";
$row1_8 = mysql_fetch_assoc(mysql_query($sql1_8));
$room1_8 = "";
$room1_8 += $row1_8['num'];

$sql1_9 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-09-01' and '2017-09-30' and room_ID ='1'";
$row1_9 = mysql_fetch_assoc(mysql_query($sql1_9));
$room1_9 = "";
$room1_9 += $row1_9['num'];

//id=2
$sql2_6 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-06-01' and '2017-06-30' and room_ID ='2'";
$row2_6 = mysql_fetch_assoc(mysql_query($sql2_6));
$room2_6 = "";
$room2_6 += $row2_6['num'];

$sql2_7 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-07-01' and '2017-07-31' and room_ID ='2'";
$row2_7 = mysql_fetch_assoc(mysql_query($sql2_7));
$room2_7 = "";
$room2_7 += $row2_7['num'];

$sql2_8 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-08-01' and '2017-08-30' and room_ID ='2'";
$row2_8 = mysql_fetch_assoc(mysql_query($sql2_8));
$room2_8 = "";
$room2_8 += $row2_8['num'];

$sql2_9 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-09-01' and '2017-09-30' and room_ID ='2'";
$row2_9 = mysql_fetch_assoc(mysql_query($sql2_9));
$room2_9 = "";
$room2_9 += $row2_9['num'];

//id=3
$sql3_6 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-06-01' and '2017-06-30' and room_ID ='3'";
$row3_6 = mysql_fetch_assoc(mysql_query($sql3_6));
$room3_6 = "";
$room3_6 += $row3_6['num'];

$sql3_7 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-07-01' and '2017-07-31' and room_ID ='3'";
$row3_7 = mysql_fetch_assoc(mysql_query($sql3_7));
$room3_7 = "";
$room3_7 += $row3_7['num'];

$sql3_8 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-08-01' and '2017-08-30' and room_ID ='3'";
$row3_8 = mysql_fetch_assoc(mysql_query($sql3_8));
$room3_8 = "";
$room3_8 += $row3_8['num'];

$sql3_9 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-09-01' and '2017-09-30' and room_ID ='3'";
$row3_9 = mysql_fetch_assoc(mysql_query($sql3_9));
$room3_9 = "";
$room3_9 += $row3_9['num'];

//id=4
$sql4_6 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-06-01' and '2017-06-30' and room_ID ='4'";
$row4_6 = mysql_fetch_assoc(mysql_query($sql4_6));
$room4_6 = "";
$room4_6 += $row4_6['num'];

$sql4_7 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-07-01' and '2017-07-31' and room_ID ='4'";
$row4_7 = mysql_fetch_assoc(mysql_query($sql4_7));
$room4_7 = "";
$room4_7 += $row4_7['num'];

$sql4_8 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-08-01' and '2017-08-30' and room_ID ='4'";
$row4_8 = mysql_fetch_assoc(mysql_query($sql4_8));
$room4_8 = "";
$room4_8 += $row4_8['num'];

$sql4_9 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-09-01' and '2017-09-30' and room_ID ='4'";
$row4_9 = mysql_fetch_assoc(mysql_query($sql4_9));
$room4_9 = "";
$room4_9 += $row4_9['num'];

//id=5
$sql5_6 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-06-01' and '2017-06-30' and room_ID ='5'";
$row5_6 = mysql_fetch_assoc(mysql_query($sql5_6));
$room5_6 = "";
$room5_6 += $row5_6['num'];

$sql5_7 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-07-01' and '2017-07-31' and room_ID ='5'";
$row5_7 = mysql_fetch_assoc(mysql_query($sql5_7));
$room5_7 = "";
$room5_7 += $row5_7['num'];

$sql5_8 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-08-01' and '2017-08-30' and room_ID ='5'";
$row5_8 = mysql_fetch_assoc(mysql_query($sql5_8));
$room5_8 = "";
$room5_8 += $row5_8['num'];

$sql5_9 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-09-01' and '2017-09-30' and room_ID ='5'";
$row5_9 = mysql_fetch_assoc(mysql_query($sql5_9));
$room5_9 = "";
$room5_9 += $row5_9['num'];

//id=6
$sql6_6 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-06-01' and '2017-06-30' and room_ID ='6'";
$row6_6 = mysql_fetch_assoc(mysql_query($sql6_6));
$room6_6 = "";
$room6_6 += $row6_6['num'];

$sql6_7 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-07-01' and '2017-07-31' and room_ID ='6'";
$row6_7 = mysql_fetch_assoc(mysql_query($sql6_7));
$room6_7 = "";
$room6_7 += $row6_7['num'];

$sql6_8 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-08-01' and '2017-08-30' and room_ID ='6'";
$row6_8 = mysql_fetch_assoc(mysql_query($sql6_8));
$room6_8 = "";
$room6_8 += $row6_8['num'];

$sql6_9 = "SELECT count(rr_RoomCount) as num FROM `room_record` where rr_Checkin between '2017-09-01' and '2017-09-30' and room_ID ='6'";
$row6_9 = mysql_fetch_assoc(mysql_query($sql6_9));
$room6_9 = "";
$room6_9 += $row6_9['num'];

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month', '仲夏夜之夢', '羅密歐與茱麗葉','十日談雙人房','拉斐爾雙人房','神曲四人房','羅馬四人房'],
          ['2017/06',<?php echo $room1_6;?>,<?php echo $room2_6;?>,<?php echo $room3_6;?>,<?php echo $room4_6;?>,<?php echo $room5_6;?>,<?php echo $room6_6;?>],
          ['2017/07',<?php echo $room1_7;?>,<?php echo $room2_7;?>,<?php echo $room3_7;?>,<?php echo $room4_7;?>,<?php echo $room5_7;?>,<?php echo $room6_7;?>],
          ['2017/08',<?php echo $room1_8;?>,<?php echo $room2_8;?>,<?php echo $room3_8;?>,<?php echo $room4_8;?>,<?php echo $room5_8;?>,<?php echo $room6_8;?>],
          ['2017/09',<?php echo $room1_9;?>,<?php echo $room2_9;?>,<?php echo $room3_9;?>,<?php echo $room4_9;?>,<?php echo $room5_9;?>,<?php echo $room6_9;?>]
        ]);

        var options = {
          chart: {
            title: '每月銷量',
            subtitle: '期間: 2017/06 - 2017/09',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>