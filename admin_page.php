<?php 
session_start();
include 'db.php';

if(!isset($_SESSION['user_email'])){
   echo "You don't have access to this page";
}

else {


        echo "Welcome, ".$_SESSION["user_name"]."<br> ";
        echo "You signed in with email:".$_SESSION["user_email"];


    $sql = "SELECT id, user_name, user_surname, user_email,user_reg_date, user_last_log FROM users";

  $query= mysqli_query($connection,$sql);
  echo "<table>";
  echo " <tr>
  <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>E-mail</th>
    <th>Sign-up date</th>
    <th>Last sign-in date</th>
    <th></th>
  </tr>";
  while($row=mysqli_fetch_assoc($query)){
    echo "<tr>";
     $id = $row['id'];
      foreach ($row as $value) {
         
          echo "<td>$value</td>";
        
      }     
        echo "<td><a href='delete.php?id=$id'>Delete</td>";
       echo "</tr>";
  }
  echo "</table>";
}
 ?>



<!DOCTYPE htmle<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form/Admin Page</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>



  <body>



    


    
  </body>
</html>
