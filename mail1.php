<?php
$to = "koppuravurinagasai@gmail.com";
$email=$_REQUEST['email'];
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
    <th>Email From</th>
    
    <th>Message</th>
  </tr>
  <tr>
    
    <td>$email</td>
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
   echo "<script> alert('feedback send successfully') </script>";
              
	
	header("Location: http://localhost/eventmanagement/feedback.php");
}
else
{
	header("Location: http://localhost/eventmanagement/feedback.php");
}
?>