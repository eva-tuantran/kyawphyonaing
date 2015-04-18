<?php

$host="mysql321.db.sakura.ne.jp"; // Host name 
$username="kyawphyonaing"; // Mysql username 
$password="Kyaw123456"; // Mysql password 
$db_name="kyawphyonaing_login"; // Database name 
$tbl_name="log_in"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['usernamesignup'];
$email=$_POST['emailsignup'];
$password1=$_POST['passwordsignup'];
$password2=$_POST['passwordsignup_confirm'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, email, password1, password2)VALUES('$name', '$email', '$password1', '$password2')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='index.html'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>