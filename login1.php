<?php
session_start();
include("connect.php");
if(isset($_POST['login']))
{
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$result= mysqli_query($con,'SELECT * FROM register WHERE  email="'.$_SESSION['email'].'" and password="'.$_SESSION['password'].'"');
 $rowcount=mysqli_num_rows($result);
        if($rowcount==true)
        {
                  while($row = mysqli_fetch_array($result))
                  {
                         
                    $_SESSION['email']=$row['email'];
                  }
  
                            header("location:bookanevent.php");
       }
      else
      {
                        ?>
                 <div class="alert alert-warning" role="alert">
                   Account Invalid
                 </div><?php
                         header("Refresh:3; url=login.php");
      }
}
else
{
  echo "access denied";
}
?>

