<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} 
//elseif ($_SESSION['usertype'] == 'student') {
  //  header("location:login.php");
//} 


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>a student</h1>
    <a href="logout.php" class="btn btn-success">logout</a>
</body>

</html>