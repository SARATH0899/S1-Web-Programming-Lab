<html>
<head>
<style>
table{
background-color:cyan;
}
</style>
</head>
<body bgcolor="green">
<?php
   include 'dbconnect.php';
   $id = $_GET['uid'];
   $sql = "SELECT * FROM `app` WHERE `reg_id` = $id ";
   $nresult = mysqli_query($con,$sql);
   
   if(isset($_POST['submit']))
{
	$n=$_POST["name"];
	$a=$_POST["address"];
	$g=$_POST["gender"];
	$c=$_POST["country"];
    $sql = "UPDATE `app` SET `app_name`='$n',`app_Address`='$a',`app_gender`='$g',`app_country`='$c' WHERE `reg_id`= $id";
	$result = mysqli_query($con,$sql);

	header( "Location: view.php" ); 
}
  
?> 
<form action="#" method="post"> 
    <?php
while($row = mysqli_fetch_array($nresult))
{
?>

<br><br><br><br><br>
<center>
<table>
<tr>
<td>
Name:</td><td><input type="text" name="name" value="<?php echo ($row["app_name"]);?>" size="20"><br><br>
</td>
</tr>
<tr><td>
<p><label for="address">ENTER YOUR ADDRESS:</label></p>
 </td><td><textarea id="address" name="address" value="" rows="4" cols="50"><?php echo ($row["app_address"]);?>
	</textarea></td></tr><br><br>
	
	<tr><td><label for="gender"> Gender:</label></td><br><br>
  <td><input type="radio" name="gender" value="male" <?php if ($row["app_gender"]=="male")
  {echo "checked";}?>>Male<br><br>
<input type="radio" name="gender" value="female" <?php if ($row["app_gender"]=="female")
  {echo "checked";}?>>Female<br><br>
</td></tr>
<tr><td>
<label for="branch"> CHOOSE YOUR COUNTRY :</label>
</td>
<td>
<select name="country">
<option <?php if ($row["app_country"]=="CANADA")
{echo "selected";}?>> CANADA  </option>
<option <?php if ($row["app_country"]=="USA")
{echo "selected";}?>> USA </option>
<option <?php if ($row["app_country"]=="INDIA")
{echo "selected";}?>> INDIA </option>
<option <?php if ($row["app_country"]=="U.K")
{echo "selected";}?>> U.K  </option>
</select><br><br>
</td>
</tr>
<tr><td>
</td><td><input type="submit" value="Submit" name="submit"></td></tr>
</center>
<?php
}
?>

</table>
</form>
</center>
</body>
</html>