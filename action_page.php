<?php

include 'connection.php';

	
if(isset($_POST['submit'])){

		$emri = $_POST['firstname'];
		$mbiemri = $_POST['lastname'];
		$email = $_POST['email'];
		$gender= $_POST['gender'];
		$account=$_POST['account'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$subject= $_POST['subject'];


		
		$sql= "INSERT INTO contact(firstname,lastname,email,gender,account,adress,country,subject) VALUES('$emri','$mbiemri','$email','$gender','$account','$address','$country','$subject')";
		if(mysqli_query($db, $sql)){
			
			echo"<script>alert('Mesazhi u dergua')</script>";
			echo"<script>window.open('contact.php','_self')</script>";
			}
		}	
		
	
	else{
		echo "Te dhenat nuk u derguan";
	}


?>
