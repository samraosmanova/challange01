<?php

	session_start(); 
	include 'db.php';

	/*
		assigning inputted data to global variables
	 */

 	$user_email	=	$_POST['user_email'];
 	$user_pass	=	$_POST['user_pass'];

 	$sql 	=	"SELECT user_email, user_pass,user_name FROM users";
 	$query 	=	mysqli_query($connection,$sql);
 	
 	while($row=mysqli_fetch_assoc($query)){
 			/*
 				this if statement checks if user data(user_email,user_pass) exists in database users
 			 */
 			
 			if(($user_email==$row['user_email']) && ($user_pass==$row['user_pass'])){
 				/*
 					$now variable is defined for getting current date and assigning it to $user_last_log
 				 */
 				
 				$now = getdate();
 				$user_last_log= $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$now['minutes'].":".$now['seconds'];

 				/*
 					updating "users" table by pushing last login datetime 
 				 */
 				
 				$email = $row['user_email'];
 				$sql2="UPDATE users SET user_last_log ='$user_last_log'  WHERE user_email='$email'";
 				$query2 = mysqli_query($connection,$sql2);
 				// $_SESSION['user_email']=$_POST['user_email'];
 				// $_SESSION["user_name"]= "SAMRA"; //$row['user_name'];
 				
 				/*
 					redirecting to admin_page after succesful login
 				 */
 				header("Location: admin_page.php");

 		}else{
 				/*
 					if login failed going back to index.php
 				 */ 				
 				header("Location: index.php");
 			}

 	}
 ?>