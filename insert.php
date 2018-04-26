<?php 
$name=$_POST['name'] ;
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$phone=$_POST['phone'];
  include("connect.php");
if($name && $email && $password && $cpassword && $phone)
{
	if(strlen($password)>3)
	{
		if($password==$cpassword)
		{
			
			$remail=mysqli_query($con,"SELECT email FROM register WHERE email='$email'");
			$checkmail=mysqli_num_rows($remail);
			if($checkmail!=0)
			{
	          echo "Email already exist try different email ";
						  
			}
		   else
		    {
				
	     		mysqli_query($con,"INSERT INTO register(name,email,password,cpassword,phone) VALUES('$name','$email','$password','$cpassword','$phone')");
		     	echo "You have succesfuly registered";
	            
			}
	   }
	  else
	  {
			echo "Your password dont match";
	  }
	}
	else
	{
		 echo "Your password is too short";
		
	}
} 
else
{ 
 	
	echo "you have to complete the form";
	
	
}

mysqli_close($con);

?>