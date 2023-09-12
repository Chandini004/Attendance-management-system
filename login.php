<?php
include("connect.php");
session_start();
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background: linear-gradient(to left,rgb(63, 62, 62),rgb(116, 114, 114),rgb(110, 109, 109),rgb(133, 132, 132),rgb(133, 131, 131),rgb(124, 123, 123),rgb(107, 106, 106),rgb(77, 75, 75));
}
        .main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 400px;
            margin: 10px auto;
            margin-top: 90px;
            /* border: 1px solid grey; */
            /* border-radius: 15px; */
            padding: 50px;
            height: 400px;
            /* background:linear-gradient(to top,rgb(167, 167, 166),rgb(233, 232, 232),rgb(190, 189, 189)); */
	        background-color: rgba(243, 235, 235,0.3);
            /* box-shadow: 0px -4px 3px 3px rgba(1, 18, 20, 0.5) inset; */
            transition: border-radius 0.25s;
        }
        .main:hover{
            border-radius: 30px;
            /* border: 2px solid black; */
	        background-color: rgba(243, 235, 235,0.7);

            /* box-shadow: 0px -4px 3px 3px rgba(66, 66, 66, 0.5) inset; */

        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 400px;
            /* padding: 30px; */
        }

        .a {
            margin-bottom: 25px;
            padding: 12px;
            font-size: 18px;
            border: transparent;
            border-bottom: 2px solid rgb(65, 64, 64);
            /* text-decoration: none; */
        }

        /* .a:focus {
            box-shadow: 2px 4px 0px 1px lightgray;
        } */

        .btn {
            margin-top: 5px;
            padding: 10px;
            width: 100px;
            border-radius: 10px;
            background-color: black;
            color: white;
            font-size: 18px;
            border: transparent;

        }
        .btn:hover{
            background-color: white;
            color:black;
            border: transparent;
        }
        p{
            text-align: center;
            font-size: 18px;
                }
        .form-select {
            padding: 12px;
            margin-bottom: 25px;
            background: transparent;
        }
        input{
            background: transparent;
            /* color: white; */
        }
        h1{
        margin-bottom: 35px;
        text-align: center;

        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Login Here!</h1>

        <div class="form">
            <form action="" method="post">
                <select name="subject" class="form-select">
                    <option>Select category</option>
                    <option value="Admin">Admin</option>
                    <option value="Teacher">Teacher</option>
                </select>
                <input type="text" placeholder="username" name="name" class="a" required autocomplete="off">
                <input type="password" placeholder="password" class="a" name="pwd" required autocomplete="off">
                <input type="submit" name="Submit" value="submit" class="btn">
                <p>Don't have an account?<a href="./registration.php">Signup</a>&nbsp&nbsphere.</p>
            </form>
        </div>
    </div>
</body>

</html>


<?php

if (isset($_POST['Submit'])) {
    $uname = $_POST['name'];
    $pwd = $_POST['pwd'];
    $sub = $_POST['subject'];
    if ($sub == 'Teacher') {
        $sel = "select * from teacherlogin where usname='$uname'";
        $res = mysqli_query($con, $sel);
        $num = mysqli_num_rows($res);
        $row = mysqli_fetch_assoc($res);

        if ($num > 0) {

            $_SESSION['username'] = $uname;
            if ($pwd != $row['passwrd']) {
                echo "<script>alert('invalid password')</script>";
            } else {
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('./teacher/index.php','_self')</script>";
            }
        } else {
            echo "<script>alert('invalid credentials')</script>";
        }
    } else {
        $sel = "select * from adminlogin where usrname='$uname'";
        $res = mysqli_query($con, $sel);
        $num = mysqli_num_rows($res);
        $row = mysqli_fetch_assoc($res);

        if ($num > 0) {

            $_SESSION['uname'] = $uname;
            if ($pwd != $row['passwrd']) {
                echo "<script>alert('invalid password')</script>";
            } else {
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('./admin/index.php','_self')</script>";
            }
        } else {
            echo "<script>alert('invalid credentials')</script>";
        }
    }
}

?>