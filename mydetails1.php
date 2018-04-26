<?php 
session_start();
include("connect.php");       
$emailid=$_SESSION['email'];
$result=mysqli_query($con,'SELECT * FROM register WHERE  email="'.$_SESSION['email'].'" ');
 while($row = mysqli_fetch_array($result))
                  {
                          $name =$row['name'];
                          $email=$row['email'];
                          $password=$row['password'];
                          $address=$row['address'];
                          $phone=$row['phone'];
                  }
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
body
{
  font-family:'Century Schoolbook';
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
body {
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

.form-signin {
  width: 100%;
  max-width: 380px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox
 {
  font-weight: 400;
}
.form-signin .form-control 
{
  position: relative;
  box-sizing: border-box;
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
       <li style="color: white;padding-top: 15px;font-size: 18px;">  


        <?php 

        echo $emailid;  

        ?></li>
    </ul>
  </div>
  </div>
</nav>



  <body class="text-center">
    <form class="form-signin" action="mydetails.php" " method="post">
 
      <br><br>
         <label style="float: left;font-size: 18px;">Name</label>

      <input type="text"  name="name" class="form-control" value="<?php echo $name; ?>" required autofocus><br>

        <label style="float: left;font-size: 18px;">Email </label>
      <input type="email"  name="email" class="form-control" value="<?php echo $email; ?>"  required autofocus><br>
      
        <label style="float: left;font-size: 18px;">Password</label>
      <input type="text"  name="password" class="form-control"  value="<?php echo $password; ?>"  required><br>
       <label style="float: left;font-size: 18px;">Address</label>
       <input type="text"  name="address" class="form-control"  value="<?php echo $address; ?>"  required><br>

       <label style="float: left;font-size: 18px;">Contact</label>
      <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" required><br>
      <button class="btn btn-primary btn-block" name="submit" type="submit"  style="font-size: 20px;">
             Update 
          </button>
     

      <?php
      if(isset($_POST['submit']))
      {
        $name1=$_POST['name'];
        $email1=$_POST['email'];
        $password1=$_POST['password'];
        $address1=$_POST['address'];
        $phone1=$_POST['phone'];
        $query="UPDATE register SET name"
           $query = "INSERT INTO register (name,email,password,address,phone) VALUES ('$name1','$email1','$password1','$address1','$phone1') WHERE email='$emailid'";
 
           if($query)
           {
                echo "<script>alert('Updated Successfully')</script>";
           }
           else
           {
             echo "<script>alert('Not Updated')</script>";
           }
      
      }

      ?>
      </form><br>
    
  

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
