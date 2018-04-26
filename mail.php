<?php
$to = "anitseventmanagement@gmail.com";
$subject = $_REQUEST['name'];
$name=$_REQUEST['name'];
$mail=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$text = $_REQUEST['message'];
$mess="
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Message</th>
  </tr>
  <tr>
    <td>$name</td>
     <td>$mail</td>
     <td>$phone</td>
     <td>$text</td>
    
  </tr>
  
</table>

</body>
</html>

";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= $mail."\r\n";


if(mail($to,$subject,$mess,$headers))
{
  echo"Email send succesfully";
	
	header("Location: http://localhost/eventmanagement/contact1.php");
}
else
{
	header("Location: http://localhost/eventmanagement/contact2.php");
}
?>