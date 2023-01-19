<html>
<head><h1 align="center">PHP Program To find Area and Perimeter of a Circle</h1>
<title>Qn 1</title>
</head>
<body>
<form method="post">
<table border="1">
<tr>
<td><input type="text" name="num1" value="" placeholder="Enter the radius of a circle"/></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$r = $_POST['num1'];
$pi = 3.14;
$area = $pi * $r * $r;
echo "Area of a Circle is: ".$area."<br>";
$perimeter = 2*$pi*$r;
echo"Perimeter of a circle is: ".$perimeter;
}
?>
</body>
</html>