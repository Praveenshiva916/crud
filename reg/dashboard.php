<?php
require("db.php");
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Secured Page</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="form">
        <p>Welcome to Dashboard</p>
        <p><a href="index.php">Home</a></p>
        <p><a href="insert.php">insert New Record</a></p>
        <p><a href="view.php">View Recorrds</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>