<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Managements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>
<style>
  * {
  border-radius: 0 !important;
  -moz-border-radius: 0 !important;
}
body{
  font-family:'Century Schoolbook';
}
.navbar{
background-color:#4c4747;
padding:10px;
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
padding-right: 100px;
}
.navbar-nav li a:hover{
  background-color:#4c4747 ;
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
    </div>

     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav ">
      <li class="active" ><a href="customerdetails.php">My Details</a></li>
      <li ><a href="bookanevnt.php">Book An Event</a></li>
       <li ><a href="bookinghistory.php">Booking History</a></li>
      <li class="active"><a href="feedback.php">Feedback</a></li>
      <li><a href="logout.php" ><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
 <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
</body>
</html>
