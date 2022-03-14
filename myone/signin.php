<?php
       
	include_once('databaseCon.inc.php');



    $email=$_POST['e-mail'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contactno=$_POST['number'];
    $message=$_POST['message'];


    $sql="INSERT INTO detofcontact (E_mail,Name,Address,Contact_no,Message) VALUES ('$email','$name','$address','$contactno','$message');";
    

    mysqli_query($conn,$sql);

    header("Location: ../myone/Contactus.php?signin=success");	
	   
	  