<?php

if(isset($_POST["submit"]))
{
	
	    $fname=$_POST["firstname"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$city=$_POST["city"];
		$cname=$_POST["cname"];
		$ccnum=$_POST["ccnum"];
		$expmonth=$_POST["expmonth"];
		$expyear=$_POST["expyear"];
		$cvv=$_POST["cvv"];
	
	$con =mysqli_connect("localhost:3308","root","");
	if(!$con)
	{
		die("cannot connect to DB server");
		
		
	}
	$sql =INSERT INTO payment(`firstname`, `email`, `address`, `city`, `cname`, `ccnum`, `expmonth`, `expyear`, `cvv`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]');
		
		mysqli_close($con,$sql);
	echo'<script language="javascript">';
	echo'alert("Payments Successful!\n ")';
	echo'</Script>';
	header('Location:index.html');
}











?>