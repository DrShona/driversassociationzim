<?php 
$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "finaldaz";  
$table = "tblmember";  
 
$fullname= $_POST['fullname']; 
$email= $_POST['email']; 
$message= $_POST['message']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO subscriptions  ". "VALUES ('$sname', '$semail', '$smessage')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 
 