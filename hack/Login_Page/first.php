
<?php

$host="localhost";
$user="root";
$password="";
$db="medicines";

mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['username'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from login where username='".$username."'AND password='".$password."' limit 1";

    $result=mysql_query($sql);
   if(mysql_num_rows($result)==1){
       echo " You Have Successfully Logged in";
         header("Location: insert_site.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title> Login Form Design</title>

        <link rel="stylesheet" type="text/css" href="first1.css">
<body>
   <div class="loginbox">
       	<img src="avatar.png" class="avatar">
       	<h1>Login Here</h1>

        	  <form method="POST" action="#">
       		<p>Username</p>
       		<input type="text" name="username" placeholder="Enter Your Username">
       		<p>Password</p>
       		<input type="password" name="password" placeholder="Enter Your Password"><br>
       		<input type="submit" name="submit" value="Login">
          <br>
       		<a href="#">Lost Your password?</a><br>
       		<a href="#">Don't have an account?</a>
       	</form>


</body>
</head>
</html>
