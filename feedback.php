<?php 
session_start();
include("connect.php");       
$emailid=$_SESSION['email'];
if(!isset($emailid)){
   header("location:login.php");
  
}


?>


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

.dropdown:hover .dropdown-menu{
  display: block;
  background-color:#4c4747;
  color:white;

}
.dropdown-menu li a:hover{
  color:white;
}
.site-footer{
background-color:#4c4747;
color:white;
margin-top:30px;
padding-top:15px;

}
.bottom-footer{
border-top:1px solid #f96211;
margin-top:10px;
padding-top:15px;
padding-bottom: 8px

}

.footer-nav {
text-align:left;
list-style:none;

}
.footer-nav li{
display:block;
}

.footer-nav a{
color:white;
}
.footer-nav a:hover{
color:#eff4f0;
text-decoration:none;
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
    <a class="navbar-brand" href="#home"><span style="color:#f96211">EVENT MANAGEMENT</span></a>
    </div>

     <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="bookanevent.php">Book An Event</a></li>
     
            <li><a href="mydetails.php">My Details</a></li>
      <li><a href="feedback.php">Feedback</a></li>
         <li><a href="logout.php">Logout</a></li>
       <li style="color: white;padding-top: 15px;font-size: 18px;"><?php echo $_SESSION['email']; ?></li>
    </ul>
  </div>
  </div>
</nav>



  <section id="mydetails" style="padding-bottom: 100px;">
<div class="container-fluid"><br><br>

      <h3 style="text-align: center;padding-top: 100px" ><strong><data style="color: #f96211">Your feedback is valuable for us</data> </strong></h3> 
      <div class="row">

        <div class="col-md-offset-3 col-md-6">
        <form action="mail1.php" name="" method="">
          <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
          <div class="form-group">
            <textarea class="form-control" name="message" rows="10" placeholder="Message" required></textarea>
          </div>
          <br><p align="center" >
          <button class="btn btn-default btn-sm" type="submit" name="button">
              <i class="fa fa-paper-plane-o"  aria-hidden="true" style="font-size: 20px;"></i> Submit
          </button>&nbsp;&nbsp;&nbsp;&nbsp;
         <button class="btn btn-default btn-sm" type="reset" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true" style="font-size: 20px;"></i> Reset
          </button></p>
        </form>
        </div>
        </div>
 </div>
</section>
  

<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script href="jquery.js"></script>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>


</body>
</html>
