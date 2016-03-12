<?php 

	include 'db.php';
 	$user_name=$_POST['user_name'];
 	$user_surname=$_POST['user_surname'];
 	$user_email=$_POST['user_email'];
 	$user_pass=$_POST['user_pass'];


 	$now = getdate();
 	$user_reg_date= $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$now['minutes'].":".$now['seconds'];
$sql = "INSERT INTO users (user_name,user_surname,user_email,user_pass,user_reg_date) VALUES ('$user_name','$user_surname','$user_email','$user_pass','$user_reg_date') ";
 				 $query = mysqli_query($connection,$sql);
 	// function validate(){
 	// 	global $query;
 	// 	global $connection;
 	// 			if(!$query){
  //                    return "Errormessage: ".mysqli_error($connection);
  //                 }else{
  //                   return "Duzdu"; 
  //                }		
 	// }
 
  //	echo validate();        
	header("Location: index.php");

 	

// samra.o@code.edu.az

 	//
 ?> 