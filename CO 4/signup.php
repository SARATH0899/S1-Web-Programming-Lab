<?php
if(isset($_POST['submit_button']))
{
	if(empty($_POST['fname']))
		empty($_POST['email_id'])
	    empty($_POST['pass'])
		empty($_POST['con_pass']
		empty($_POST['phone'])
}
{
	die("plaese Enter all Fields");
}
if($_POST['pass']!==$_POST['con_pass'])
 {
	 die('password and confirm password aren't same!);
 }
if(!preg_match('/^[0-9]{10}$/',$_POST['phone']))
	{
		echo("invalid phone number!";
	}
	else{
		echo("Succesfull");
	}
	}
	?>