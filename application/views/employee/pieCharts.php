<?php
include("include.php");
$sql1 ="select COUNT(rr_RoomNumber) as num from room_record where room_ID = '1' and rr_State = '1'";
$result1 = mysql_query($sql1);
$row1 = mysql_fetch_assoc($result1);
//echo $row1["num"];

$sql2 ="select COUNT(rr_RoomNumber) as num from room_record where room_ID = '2' and rr_State = '1'";
$result2 = mysql_query($sql2);
$row2 = mysql_fetch_assoc($result2);
//echo $row2["num"];

$sql3 ="select COUNT(rr_RoomNumber) as num from room_record where room_ID = '3' and rr_State = '1'";
$result3 = mysql_query($sql3);
$row3 = mysql_fetch_assoc($result3);
//echo $row3["num"];

$sql4 ="select COUNT(rr_RoomNumber) as num from room_record where room_ID = '4' and rr_State = '1'";
$result4 = mysql_query($sql4);
$row4 = mysql_fetch_assoc($result4);
//echo $row4["num"];

$sql5 ="select COUNT(rr_RoomNumber) as num from room_record where room_ID = '5' and rr_State = '1'";
$result5 = mysql_query($sql5);
$row5 = mysql_fetch_assoc($result5);
//echo $row5["num"];

$sql6 ="select COUNT(rr_RoomNumber) as num from room_record where room_ID = '5' and rr_State = '1'";
$result6 = mysql_query($sql6);
$row6 = mysql_fetch_assoc($result6);
//echo $row6["num"];

?>

  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['仲夏夜之夢', <?php echo $row1["num"];?>],
          ['羅密歐與茱麗葉', <?php echo $row2["num"];?>],
          ['十日談雙人房', <?php echo $row3["num"];?>],
          ['拉斐爾雙人房', <?php echo $row4["num"];?>],
          ['神曲四人房', <?php echo $row5["num"];?>],
          ['羅馬四人房', <?php echo $row6["num"];?>]
        ]);

        // Set chart options
        var options = {'title':'房型住房率',
                       'width':850,
                       'height':800};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>


