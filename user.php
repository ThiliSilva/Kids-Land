
<?php
session_start();

			if(isset ( $_POST['email'] ))
			{
		
				$email = $_POST['txt_email'];
				$password = $_POST['txt_password'];
				
				$con= mysqli_connect("localhost","root","","ajaxdata");
				if(!$con)
				{
					die("Sorry, We are facing a technical issue");
				}
				
				$sql = "INSERT INTO `ajaxdb`(`id`, `email`, `password`) VALUES (NULL, '".$email."', '".$password."');";
				$results=mysqli_query($sql,$con);
				
				if (mysqli_num_rows($results)>0)
				{ 
					$_SESSION["email"] = $email;
					header('Location:home.html');
				}
				else
				{
					echo"Please enter a correct username and a password";
				}
			   mysqli_close($conn);
			}
		  ?>


	
			