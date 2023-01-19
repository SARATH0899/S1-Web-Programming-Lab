<html>
    <head>
    <title> Application Form </title>
    <style>
table{
background-color:lightgrey;
}
</style>
</head>
    <body bgcolor="lightgreen">
<?php
include 'dbconnect.php';
 if(isset($_POST["submit"])){
    $n=$_POST["name"];
    $a=$_POST["address"];
    $g=$_POST["gender"];
    $c=$_POST["country"];

    $sr="INSERT INTO `app`( `app_name`, `app_address`, `app_gender`, `app_country`) VALUES ('$n','$a','$g','$c')";
		$result=mysqli_query($con,$sr);
	header("location:view.php");

 }
?>

    <form action="#" method ="post" >
<center>
        <h2> Application Form for Admission </h2>
        <table border="2">
<tr>
<td>
Name:</td><td><input type="text" name="name" size="20"><br><br>
</td>
</tr>
<tr><td>
<p><label for="address">ENTER YOUR ADDRESS:</label></p>
 </td><td><textarea id="address" name="address" rows="4" cols="50">
	</textarea></td></tr><br><br>
	
	<tr><td><label for="gender"> Gender:</label></td><br><br>
<td><input type="radio" name="gender" value="male">Male<br><br>
<input type="radio" name="gender" value="female">Female<br><br>
</td></tr>
<tr><td>
<label for="branch"> CHOOSE YOUR COUNTRY :</label>
</td>
<td>
<select name="country">
<option> INDIA </option>
<option> USA </option>
<option> CANADA  </option>
<option> U.K  </option>
</select><br><br>
</td>
</tr>
<tr><td>
</td><td><input type="submit" value="Submit" name="submit"></td></tr>
</center>
</table>
</form>
</body>
</html>