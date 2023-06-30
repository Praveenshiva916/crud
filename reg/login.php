<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head><body>
<?php 
require('db.php');
session_start();
//if form submited insert values into the database
if(isset($_POST['username'])){
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($con,$username);

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);

//cheacking is user existing in the database or not
$query = "SELECT * FROM `users` WHERE username = '$username' and password='$password'";
$result = mysqli_query($con,$query) or die(mysqli_error()); 
$rows = mysqli_num_rows($result);
if($rows==1){
    //if (!$result || mysqli_num_rows($result) == 0){

$_SESSION['username'] = $username;
header("location: index.php");  }
else{
echo "<div class='form'><h3>Username/password is incorrect</h3><br>Click here to <a href='login.php'>login</a></div>";
}
}
else{
    ?>
<div class ="form">
<h1>Log in </h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="username" required/>
<input type = "password" name="password" placeholder="passwod" required/>
<input type = "submit" type="submit" value="login" >
</form>
<p>not registered yet? <a href = 'register.php'>Register Here </a></p>
</div>
<?php } ?>