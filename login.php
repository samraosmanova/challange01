<?php 
	include 'db.php';
 	$user_email=$_POST['user_email'];
 	$user_pass=$_POST['user_pass'];


 	$sql = "SELECT user_email, user_pass FROM users";

 	$query=	mysqli_query($connection,$sql);
 	
 	while($row=mysqli_fetch_assoc($query)){
 			if(($user_email==$row['user_email']) && ($user_pass==$row['user_pass'])){
 				//echo "Logged in successfully";
 				$now = getdate();
 				$user_last_log= $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$now['minutes'].":".$now['seconds'];
 				$date = $row['user_email'];
 				$sql2="UPDATE users SET user_last_log ='$user_last_log'  WHERE user_email='$date'";
 				$query2 = mysqli_query($connection,$sql2);
 				if(!$query2){
 					echo mysqli_error($connection);
 					}
 					
 				header("Location: admin_page.php");

 		}
 			else{
 				
 				header("Location: index.php");
 			}

 	}


 ?>