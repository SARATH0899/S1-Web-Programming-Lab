<html>
<head>
<style>
table{
background-color:lightblue;
}
</style>
</head>
<body>
<?php
include 'dbconnect.php';
?>
<a href="form.php"> REGISTER HERE </a>
<center>
<table  border="5">
<tr>
<th>ID</th>
<td>NAME</td>
<td>Address</td>
<td>Gender</td>
<td>Country</td>
<td>Edit</td>
<td>delete</td>
</tr>
<?php
$result=mysqli_query($con,"SELECT * FROM `app`");
while($row=mysqli_fetch_array($result))
{
	?>
	
	<tr>
	<td><?php echo $row["reg_id"];?></td>
	<td><?php echo $row["app_name"];?></td>
	<td><?php echo $row["app_address"];?></td>
	<td><?php echo $row["app_gender"];?></td>
	<td><?php echo $row["app_country"];?></td>
	<td><a href="update.php?uid=<?php echo $row["reg_id"]; ?> ">UPDATE </a></td>
	<td><a href="delete.php?uid=<?php echo  $row["reg_id"];?>">REMOVE  </a></td>
	</tr>
	
<?php
}
?>	
</table>
</center
</body>
</html>