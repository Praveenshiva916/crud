<?php
include ("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome My Database</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
   <div class="form">
    <p>Welcome<?php echo " "."Mr"." ".$_SESSION['username'];?></p>
    <p>This is secure area.</p>
    <p><a href="dashboard.php">Dashboard</a></p>
    <a href="logout.php">Logout</a>
   </div> 
</body>
</html>

