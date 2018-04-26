
<?php 
session_start();
include("connect.php");
$emailid=$_SESSION['email'];
if(!isset($emailid)){
   header("location:login.php");
  
}
$query="SELECT * FROM register WHERE email='$emailid'";
$result=mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
  $customerid=$row['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Managements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
   <script src="js/jquery-ui.min.js"></script>
</head>
<style>
  * {
  border-radius: 0 !important;
  -moz-border-radius: 0 !important;
    }
body
{
  font-family:'Century Schoolbook';
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 50px;
  padding-bottom: 40px;
  background-color: #ffffcc;
}
.navbar{
background-color:#4c4747;
padding:13px;
font-family:'Century Schoolbook';

}
.navbar-header .navbar-brand{
  color:white;
  padding-left: 50px;
  font-size: 23px;

}
.navbar-nav li  a {
font-size:18px;
color:white;
}
.navbar-nav li a:hover{
  background-color:#4c4747 ;



}


.form-signin {
  width: 100%;
  max-width: 380px;
  padding: 15px;
  margin: 0 auto;
}

.form-signin .form-control 
{
  position: relative;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus 
{
  z-index: 1;
}
.form-signin input[type="email"] 
{
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] 
{
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


</style>

<body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>                        
      </button>
    <a class="navbar-brand" href="#home"> <span style="color:#f96211">EVENT MANAGEMENT</span></a>
    </div>

     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="bookanevent.php">Book An Event</a></li>
     
       <li class="active" ><a href="mydetails.php">My Details</a></li>
      <li><a href="feedback.php">Feedback</a></li>

         <li><a href="logout.php">Logout</a></li>
       <li style="color: white;padding-top: 15px;font-size: 18px;" class="text-ca">  <?php echo $_SESSION['email'];  ?></li>
    </ul>
  </div>
  </div>
</nav>



  <body class="text-center">
    <form class="form-signin" action=" bookanevent1.php" method="post">
       <h1 class="h3 mb-3 font-weight-normal" style="color: #f96211"; >Book An Event</h1><br>
       <label style="float: left;font-size: 18px;">Customer Id</label><br>
       <input type="text" class="form-control" name="customerid" value="<?php echo $customerid;?>" readonly><br>
       <input type="hidden" name="customeremail" value="<?php echo $emailid ?>">
         <label style="float: left;font-size: 18px;">Event Type</label>
        
      <select class="form-control" id="eventtypeid" name="eventtype" onchange="change_eventtype()" required>
        <option >Select</option>
      <?php
        $rel=mysqli_query($con,"SELECT * FROM eventtype");
        while($row=mysqli_fetch_array($rel))
        {
          ?>
          <option value="<?php echo $row["id"]; ?>"> <?php echo $row["name"];?></option>
        <?php
           }
        ?>
      </select><br>
      <label style="float: left;font-size: 18px;">Event Place</label>
      <div id="eventplaceid">
      <select class="form-control" name="eventplace"  required>
       <option>Select</option>
      </select>
    </div>
    <br>
     <label style="float: left;font-size: 18px;">No Of Guest</label><br>
    <input type="text" class="form-control" name="noofguest" required ><br>

    <label style="float: left;font-size: 18px;">Equipment</label><br>
     <div class="checkbox" style="width: 300px;font-size: 18px;text-align: left;">
      <label><input type="checkbox" name="equipment[]" value="5000">Dj</label>
      <br>
      <label><input type="checkbox" name="equipment[]" value="6000">Stage</label>
      <br>
      <label><input type="checkbox" name="equipment[]" value="2000">Mike And Speakers</label>
    </div>
      
    <br>

    <label style="float: left;font-size: 18px;">Date</label>
    <input type="date" id="calendar" class="form-control" name="dateofevent"/ ><br>
     
      <label style="float: left;font-size: 18px;">Food</label><br>
     <div class="checkbox" style="width: 300px;font-size: 18px;text-align: left;">
      <label><input type="checkbox" name="food[]" value="100">Breakfast</label>
      <br>
      <label><input type="checkbox" name="food[]" value="200">Lunch</label>
      <br>
      <label><input type="checkbox" name="food[]" value="20">Tea & Snacks</label>
      <br>
      <label><input type="checkbox" name="food[]" value="300">Dinner</label>
      <br>
      <label><input type="checkbox" name="food[]" value="300">Veg</label>
      <br>
      <label><input type="checkbox" name="food[]" value="600">Veg & Nonveg</label>
      <br>
      
    </div><br>
    <label style="float: left;font-size: 18px;">Lighting</label><br>
      <div class="checkbox" style="width: 300px;font-size: 18px;text-align: left;">
      <label><input type="radio" name="lighting" value="4000">&nbsp;YES</label>
      <label><input type="radio" name="lighting" value="0">&nbsp;No</label>
      <br>
    </div><br>
    <label style="float: left;font-size: 18px;">Flowers</label><br>
      <div class="checkbox" style="width: 300px;font-size: 18px;text-align: left;">
      <label><input type="radio" name="flower" value="2500">&nbsp;YES</label>
      <label><input type="radio" name="flower" value="0">&nbsp;No</label>
      <br>
    </div><br>
    <label style="float: left;font-size: 18px;">Seating</label><br>
      <div class="checkbox" style="width: 300px;font-size: 18px;text-align: left;">
      <label><input type="radio" name="seating" value="2500">&nbsp;YES</label>
      <label><input type="radio" name="seating" value="0">&nbsp;No</label>
      <br>
    </div><br>
           <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Submit</button><br>

      </form><br>

<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script href="jquery.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>
<script type="text/javascript">
  function change_eventtype()
  {
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","ajax.php?event="+document.getElementById("eventtypeid").value,false);
    xmlhttp.send(null);
    
    document.getElementById("eventplaceid").innerHTML=xmlhttp.responseText;

  }
  
</script>
<script >
  
  $(function(){

      $("input[id='calendar']").datepicker();

  })
</script>

</body>
</html>


