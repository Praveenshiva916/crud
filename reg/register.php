<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php
    require('db.php');
    if(isset($_REQUEST['username'])){
        $username=stripslashes($_REQUEST['username']);
        $username=mysqli_real_escape_string($con,$username);
        $email=stripslashes($_REQUEST['email']);
        $email=mysqli_real_escape_string($con,$email);
        $password=stripslashes($_REQUEST['password']);
        $password=mysqli_real_escape_string($con,$password);
        $trn_date=date("Y-m-d H:i:s");
        $query="INSERT into `users`(`Username`,`Password`,`Email`,`Date`)values('$username','$password','$email','$trn_date')";
        $result=mysqli_query($con,$query);
        
        if($result){
            echo"<div class='form'><h3> you are registered Successfully</h3><br/> click here to <a href='login.php'>Log in</a></div>";
        }
    
    }
    else{
        ?>
    <div class="form">
    <h1>Registration</h1>
            <form name="registration" method="POST" action="">
                <p><input type="text" name="username" placeholder="Enter uers Name" required/></p>
                <p><input type="email" name="email" placeholder="Enter email" required/></p>
                <p><input type="password" name="password" placeholder="Enter password" required/></p>
                <input type="submit" type="submit" value="Submit"/></p>
            </form>
    </div>
    <?php } ?>
    </body>
    </html>
    