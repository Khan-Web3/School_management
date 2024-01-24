<?php

error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";


$data = mysqli_connect($host, $user, $password, $db);


if($data === false){
    die("database connectivity failed!");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST['username'];
    $pass = $_POST['password'];


    $sql = "select * from student where username = '".$user."' AND password = '".$pass."' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "student"){

        $_SESSION['username'] = $user;
       // $_SESSION['usertype'] = "student";
        header("location:studenthome.php");
    }
    else if($row["usertype"] == "admin"){

        $_SESSION['username'] = $user;
       // $_SESSION['usertype'] = "admin";
        header("location:adminhome.php");
    }
    else{
        $message= "user name or password is not match";
        $_SESSION['loginmessage'] = $message;
        header("location:login.php");
        `
        <script>
        alert("invalid password or username");
        </script>
        `;
    }
}


?>