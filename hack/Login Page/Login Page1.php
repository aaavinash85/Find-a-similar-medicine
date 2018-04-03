
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

if(isset($_POST['submit'])){

    $type=$_POST['chemist'];
    $Username=$_POST['username'];
    $password=$_POST['password'];

    $query="select * from login where username='$username' and password='$password' and type='$type'";
    $result=mysql_query(query);
while($row=mysql_fetch_array($result)){
if($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
       header("Location: admin.html");
    }elseif($row['Username']==$Username && $row['password']==$password && $row['type']=='chemist'){
   header("Location: User.html");
    }
  }

}
?>

<!DOCTYPE html>
<html>
<head>
     <title>Multiple Login Form</title>

</head>
<body>
      <form method= "Post">
   <table>
      <tr>
          <td>chemist Type</td>
             <td><select name="type">
                 <option value="-1">Select chemist Type</option>
                   <option value="Admin">Admin</option>
                      <option value="chemist">chemist</option>

             </select> </td>
           </tr>
           <tr>
               <td>Username</td>
                 <td><input type="text" name="Username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pwd" placeholder="password"></td>
                </tr>
                <tr>
                    <td>&nbps;</td>
                    <td><input type="submit" name="submit" value="login"></td>
                </tr>
      </table>
</form>
</body>
</html>
