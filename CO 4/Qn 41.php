<html>
<head><h3 align:"center">List of Students</h3>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Qn 41</title>
</head>
<body>
<?php
echo "Default Order"."<br>";
$v=array("Sarath","Shon","Amal","Siddharth","Nithin","Sreerag");
print_r($v);
asort($v);
echo"<br><br"."Ascending Order"."<br>"
print_r($v);
asort($v);
echo"<br><br"."Decending Order"."<br>"
print_r($v);
?>
</body>
</html>