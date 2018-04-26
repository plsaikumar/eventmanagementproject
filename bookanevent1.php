
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
   <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script href="jquery.js"></script>
   <script src="js/jquery-ui.min.js"></script>
</head>


<?php

    include("connect.php");
         if (isset($_POST['submit']))
        {

             
              $customerid=$_POST['customerid'];
              $eventtype = $_POST['eventtype'];
              $eventplace = $_POST['eventplace'];
              $noofguest = $_POST['noofguest'];
              $a = $_POST['equipment'];
              $equipment=implode(',',$a);
              $dateofevent=$_POST['dateofevent'];
              $b = $_POST['food'];
              $food=implode(',', $b);
              $lighting = $_POST['lighting'];
              $flower=$_POST['flower'];
              $seating=$_POST['seating'];
             
                $query = "INSERT INTO bookanevent (customerid,eventtype,eventplace,noofguest,equipment,dateofevent,food,lighting,flowers,seating) VALUES ('$customerid','$eventtype','$eventplace','$noofguest','$equipment','$dateofevent','$food','$lighting','$flower','$seating' )";

                 $result = mysqli_query($con,$query);
                 if(!empty( $_POST['equipment']))
              {
                $cal=0;
                foreach ($_POST['equipment'] as $equipment) {

                  $cal+=$equipment;
                
                }
               
              }
              if(!empty( $_POST['food']))
              {
                $cal1=0;
                foreach ($_POST['food'] as $food) {
                
                  $cal1+=$food;
                
                }
              }
              $cal3=0;
              $cal3=$cal+($cal1*$noofguest)+$lighting+$seating+$flower;
       ?>       

    <?php

                  if($result)
                  {?>
                    <br><br>
                    <h3 align="center">Total Bill</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Customer Id</th>
      <th>Event Type</th>
      <th>Event Place</th>
      <th>No OF Guest</th>
      <th>Equipment</th>
      <th>Date</th>
      <th>Food</th>
      <th>Lighting</th>
      <th>Flowers</th>
      <th>Seating</th>
      <th>Total Amount</th>
      
    </tr>
    </thead>
    <tbody>
    <tr>
  <td><?php echo "$customerid";?></td>    
<td><?php echo "$eventtype";?></td>
<td><?php echo "$eventplace";?></td>
<td><?php echo "$noofguest";?></td>
<td><?php echo "$equipment";?></td>
<td><?php echo "$dateofevent";?></td>
<td><?php echo "$food";?></td>
<td><?php echo "$lighting";?></td>
<td><?php echo "$flower";?></td>
<td><?php echo "$seating";?></td>
<td><?php echo "$cal3";?></td>
    </tr>
    </tbody>
  </table>

<p align="center">
<a href="javascript:window.print()" class="btn btn-info"  >Print</a>
<a href="bookanevent.php" class="btn btn-info">Back</a>
</p>
              <?php
                
                
              }
              else
              {?>
                 <div class="alert alert-warning" role="alert">
                    Password Dosen't Match Plzz Check It Once
                 </div><?php
               }
          }
          
?>