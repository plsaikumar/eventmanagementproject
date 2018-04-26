
<?php
include ("connect.php");
?>
<html lang="en">
<head>
  <title>Event Managements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<style>
  
html,
body {
  height: 100%;
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
  background-color: #4c4747;
}

.form-signin {
  width: 100%;
  max-width: 380px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 1;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>



<body class="text-center">
    <form class="form-signin" action="signup.php" method="post">
  <img src="images/text.gif" width="400" style="padding-top: 140px">

      <h1 class="h3 mb-3 font-weight-normal" style="color: white" >Sign Up</h1>
            <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name" required autofocus><br>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus><br>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required><br>


      <label for="inputPassword" class="sr-only">Confirm Password</label>
      <input type="password" name="cpassword" id="inputPassword" class="form-control" placeholder="Confirm Password" required><br>
      
       <textarea class="form-control"  name="address" rows="3" placeholder="Address" required></textarea>
          <br>
      <label for="inputPassword" class  ="sr-only">Contact Number</label>
      <input type="text"  name="phone" class="form-control" placeholder="Contact No" required><br>
      
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign Up</button><h5 style="color: white">Already a member <a href="login.php" style="text-decoration: none;color:#4e85fc">Login</a> </h5>
     <h4><a href="index.php" style="text-decoration:none;color:white">Back</a></h4>
     <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address=$_POST['address'];
    $phone = $_POST['phone'];

    $submit = $_POST['submit'];
    if (isset($submit))
    {
              
              $remail=mysqli_query($con,"SELECT email FROM register WHERE email='$email'");
              $checkmail=mysqli_num_rows($remail);
            if($checkmail!=0)
            {?>
                  <div class="alert alert-warning" role="alert">
                    Emailid Already Exist Try Other Email
                 </div>
            <?php
            }
          else
            {
              if($password==$cpassword)
              {

                $query = "INSERT INTO register (name,email,password,address,phone) VALUES ('$name','$email','$password','$address','$phone')";

                 $result = mysqli_query($con,$query);?>
                 <div class="alert alert-success" role="alert">
                    Your Account Has Successfully Registered
                 </div><?php
                 
              }
              else
              {?>
                 <div class="alert alert-warning" role="alert">
                    Password Dosen't Match Plzz Check It Once
                 </div><?php
              }
            }

    }
}
?>
    </form>


    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  
</html>
