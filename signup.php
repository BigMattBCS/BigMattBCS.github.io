<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username)

    if(!empty($username) && !empty($password))
    {
        $user_id  = random_num(10);
        $query = "insert into account (user_id,username,password) values ('$user_id','$username','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }
    else
    {
        echo "Please enter some valid information";
    }
    
}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>
  
    <style type="text/css">


    #text{

            height: 25px;
            border-radius: 5x;
            padding: 4px;
            width: 50%;
            border: solid thin #aaa;
    }

    #button{

            padding: 10px;
            width: 50%;
            left:50%;
            color: white;
            background-color: rgb(54,100,255);
            border: none;
    }    

    #box{

            background-color: rgb(0, 0, 0);
            margin: auto;
            width: 50%;
            padding: 20px;
    }
    
    </style>

    <div id="box"> 
        <div style="font-size: 20px;margin: 10px;color: rgb(54,141,255);">SIGN UP</div>
        <form method="post">
            <input id="text" type="text" name="username" placeholder="username"><br><br>
            <input id="text" type="password" name="password" placeholder="password"><br><br>

            <input id="button" type="submit" value="Sign up"><br><br>

            <a href="login.php">Click to Login</a><br><br>
    </div>
</body>
</html>
