<?php
      include("config.inc.php");
$Dbcon = new connection();
$Dbcon->localarea();

      ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'zz');
        data.addColumn('number', 'zz');
        data.addRows([
          ['Singhania', 3],
          ['Fatima', 1],
          ['Don bosco', 1],
          ['NCT', 1],
          ['Jai hind', 2]
        ]);

        // Set chart options
        var options = {'title':'Priority analysis of school',
                       'width':800,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<body background="bg.jpg">

<div class="container">
  <h2>SURVEY REPORT</h2>
  <p>Prioritorized List of schools worth investing!!</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>SCHOOL NAME</th>
    
      <th>CONSTRUCTION COST</th>
      
      <th>AMOUNT BY COMMUNITY</th>
      
      <th>TOTAL FUNDS REQUIRED</th>
      </tr>
    </thead>
    <tbody>
<?php 
              $SqlContent = $Dbcon->ExecuteQuery("select school_name,construction_cost,amount from survey ORDER BY calc_value desc");
            $totalrows =  $Dbcon->NumRows($SqlContent);
            $i = 1;
            while($totalrows = $Dbcon->FetchArray($SqlContent))
              {

                ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $totalrows['school_name']; ?></td>
        <td><?php echo $totalrows['construction_cost'] ?> </td>
        <td><?php echo $totalrows['amount'] ?> </td>
        <td><?php echo $totalrows['construction_cost']-$totalrows['amount'] ?></td>
      </tr>
      <?php 
         $i++;
       }
             ?>

    </tbody>
  </table>
  </div>
</div>
<center><div id="chart_div"></div></center>
</body>
</html>
