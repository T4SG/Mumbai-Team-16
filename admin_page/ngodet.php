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

<body background="bg.jpg">

<div class="container">
  <h2>SURVEY REPORT</h2>
  <p>Institutions in your area!!</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>SCHOOL NAME</th>
    
    
      </tr>
    </thead>
    <tbody>
<?php 
              $SqlContent = $Dbcon->ExecuteQuery("select school_name from school_info s,city c,users u where s.city_id=c.city_id and u.city=c.city_name");
            $totalrows =  $Dbcon->NumRows($SqlContent);
            $i = 1;
            while($totalrows = $Dbcon->FetchArray($SqlContent))
              {

                ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $totalrows['school_name']; ?></td>
        


      </tr>
      <?php 
         $i++;
       }
             ?>

    </tbody>
  </table>
   <iframe
    width="600"
    height="450"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=API_KEY
      &q=Butchart+Gardens+Victoria+BC
      &attribution_source=Google+Maps+Embed+API
      &attribution_web_url=http://www.butchartgardens.com/
      &attribution_ios_deep_link_id=comgooglemaps://?daddr=Butchart+Gardens+Victoria+BC" allowfullscreen>
  </iframe>
  </div>
</div>

</body>
</html>
