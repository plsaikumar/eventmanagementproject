<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Managements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<body style="background-color: #ffffcc">
<?php
$event=$_GET['event'];

if($event!="")
{
	$rel=mysqli_query($con,"SELECT * FROM eventplace WHERE event_id=$event");
	?>
<select class="form-control" name="eventplace" onchange="change_eventplace()">
	<option>Select</option>
			<?php
		while($row=mysqli_fetch_array($rel))
		{
			?>
	<option value="<?php echo $row["id"]; ?>"> <?php echo $row["eventplacename"];?></option>
        <?php
           }
        ?>
</select>
<?php
}
?>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script href="jquery.js"></script>
</body>
</html>
