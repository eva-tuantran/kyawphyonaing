<?php

$host="mysql321.db.sakura.ne.jp"; // Host name 
$username="kyawphyonaing"; // Mysql username 
$password="Kyaw123456"; // Mysql password 
$db_name="kyawphyonaing_login"; // Database name 
$tbl_name="log_in"; // Table name 

mysql_connect("$host", "$username", "$password");
mysql_select_db("$db_name");

$myusername=mysql_real_escape_string($_POST['myusername']);
$mypassword=mysql_real_escape_string($_POST['mypassword']);

$sql="SELECT * FROM $tbl_name WHERE name='$myusername' and password1='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  session_start();
  $_SESSION['username'] = $myusername;
  $_SESSION['password'] = $mypassword; 
  header("location: login_success.php");
} 
    else {
        echo "Wrong Username or Password";
}

?>