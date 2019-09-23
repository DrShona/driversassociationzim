<?php 
 //set up mysql connection
mysql_connect("localhost", "root", "") or die(mysql_error());
//select database
mysql_select_db("finaldaz") or die(mysql_error());
 
$fullame = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

 
$query = "INSERT INTO tblmember(id, fullname, email, message)
VALUES (NULL, '{$fullname}', '{$email}', '{$message}')";
 
if (mysql_query($query)) {
 
echo "<script type=\"text/javascript\">
                alert(\"New member added successfully.\");
                window.location = \"index.php\"
            </script>";
 
} else
die("Failed: " . mysql_error());
?>;