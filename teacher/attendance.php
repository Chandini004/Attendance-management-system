<?php
include('../connect.php');
session_start();

if (!$_SESSION['username']) {
    header('location: ../login.php');
}

?>



<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-sizing: border-box;
        }

        .containr {
            margin-top: 100px;
        }

        form {
            margin-left: 0px;
            /* background-color: antiquewhite; */
        }

        .f1 {
            display: flex;
            margin-top: 40px;
	        box-shadow: 0px -4px 3px 3px rgba(1, 18, 20, 0.5) inset;
            background: linear-gradient(to bottom,rgb(58, 59, 59),rgb(119, 119, 121),rgb(75, 74, 74));
            color:aliceblue;
            width: 76vw;
            padding: 40px;
            padding-right: 50px;
            transition: border-radius 0.25s;
        }
        .f1:hover{
	        box-shadow:none;
border-radius: 25px;
        }
        .a {
            font-size: 18px;
            margin-right: 3px;
            /* margin-left: 140px; */
        }

        .b {
            font-size: 18px;
            margin-right: 3px;
            /* width: 400px; */
        }

        #sec1{
            border: transparent;
            border-bottom: 2px solid gray;
            padding: 5px;
            padding-left: 20px;
            width: 250px;
            /* border-radius: 7px; */

            margin-right: 40px;
        }

        #dept,#sec{
            border: transparent;
            border-bottom: 2px solid gray;
            padding: 5px;
            padding-left: 20px;
            width: 150px;
            /* border-radius: 7px; */
            background: transparent;
            margin-right: 40px;
        }

        .form-select {
            width: 250px;
            margin-right: 40px;
        }

        .table {
            margin-left: 150px;
        }

        #btnn {
            margin-left: 150px;
        }

        .table a {
            text-decoration: none;
        }

        body{
    background: linear-gradient(to left,rgb(76, 75, 75),rgb(158, 157, 157),rgb(218, 214, 214),rgb(201, 199, 199),rgb(233, 230, 230),rgb(167, 163, 163),rgb(77, 75, 75));
}

        .head {
            width: 100%;
            height: 90px;
            background: black;
            color: aliceblue;
            text-align: center;
            line-height: 90px;
        }

        .head h1 {
            padding-top: 20px;
        }

        #sidenav {
            position: absolute;
            line-height: 60px;
            /* padding-left: 50px; */
            height: 60px;
            background-color: rgb(44, 43, 44);
            width: 100%;
        }

        nav ul li {

            display: inline-block;
            margin-right: 34px;
        }

        nav ul li a {
            text-decoration: none;
            color: rgb(253, 252, 252);
            font-size: 15px;
            font-family: cursive;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            width: 0;
            height: 2px;
            background-color: rgb(161, 157, 160);
            position: absolute;
            left: 20%;
            border-radius: 10px;
            bottom: -6px;
            transition: 0.3s;
        }

        nav ul li a:hover::after {
            width: 60%;
        }

        .container {
            width: 100%;
            height: 100vh;
            position: absolute;
            margin-top: 100px;
            /* background-color: aqua; */
            color: black;
        }

        form {
            margin-left: 200px;
            margin-top: -40px;
        }

        label {
            font-size: 18px;
            margin-right: 3px;
        }

        
        table {
            margin-left: 80px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="head">
        <h1>Attendance Management System</h1>
    </div>
    <div id="sidenav">
        <nav>
            <!-- <p>WELCOME GUEST</p> -->
            <ul>
                <li style="color:aliceblue;margin-right: 500px;font-size: 18px;"> <?php

                    if (!isset($_SESSION['username'])) {
                        echo "welcome guest";
                    } else {
                        echo "WELCOME  " . $_SESSION['username'];
                    }

                    ?></li>
                <li><a href="index.php?student">STUDENTS</a></li>
                <li><a href="index.php?faculty">FACULTIES</a></li>
                <li><a href="attendance.php">ATTENDANCE</a></li>
                <li><a href="index.php?report">REPORTS</a></li>
                <li><a href="../logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </div>


    <div class="container" style="width:100vw;margin-left:-50px;">
        <h2 style="margin-left:550px">ATTENDANCE FORM</h2><br>
        <form action="" method="post">
            <div class="f1">
                <label for="batch" class="a">Semister:</label>
                <input type="text" name="sem" id="sec">
                <label for="dept" class="b">Department:</label>
                <input type="text" name="dept" id="dept">
            
            
                <label for="sec" class="a1">Section:</label>
                <input type="text" name="sec" id="sec">
                
                <input type="submit" name="submit" value="Search" class="btn btn-dark">
            </div>
        </form>
        <br>
        <br>

        <table class="table table-stripped table-hover  ">
            <thead>
                <tr>
                    <th scope="col">Registration No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Section</th>

                    <th scope="col">Date</th>
                    <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['submit'])) {
                    
                    $sem = $_POST['sem'];
                    $dpt = $_POST['dept'];
                    $sec = $_POST['sec'];

                    // $d = $_POST['date'];
                    $sql = "select * from stddetails where sem='$sem' and dept='$dpt' and section='$sec'";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['regno'];
                        $name = $row['sname'];
                        $dept = $row['dept'];
                        $sect = $row['Section'];
                        $semm = $row['sem'];
    $dat = date("Y-m-d");

                        echo '<tr>
              <th scope="row">' . $id . '<input type="hidden" name="stat_id[]" value="' . $id . '"></th>
              <td>' . $name . '</td>
              <td>' . $dept . '</td>
              <td>' . $semm . '</td>
              <td>' . $sect . '</td>
              <td>' . $dat . '</td>
              
    <td>
    <button class="btn btn-dark"><a href="attendance.php?pid=' . $id . '" class="text-light">Present</a></button>
    <button class="btn btn-info"><a href="attendance.php?aid=' . $id . ' " class="text-light">Absent</a></button>
</td>
              </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
        <br>

    </div>
</body>
</html>

<?php
if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    $val = 'Present';
    $dat = date("Y-m-d");
    $sql = "insert into stdattendance(regno,date,status) values('$pid','$dat','$val')";
    $res1 = mysqli_query($con, $sql);
    if ($res1) {
        echo "<script>alert('saved!')</script>";
        echo "<script>window.open('attendance.php','_self')</script>";
        // header('Location:'.$_SERVER['PHP_SELF']);
        // header("Location: " . $_GET["continue"]);
        // header("Location: " . $_SERVER["HTTP_REFERER"]);
        die;

    }

}
if (isset($_GET['aid'])) {
    $pid = $_GET['aid'];
    $val = 'Absent';
    $dat = date("Y-m-d");
    $sql = "insert into stdattendance(regno,date,status) values('$pid','$dat','$val')";
    $res1 = mysqli_query($con, $sql);
    if ($res1) {
        echo "<script>alert('saved!')</script>";
        // header("Location:attendance.php");
        echo "<script>window.open('attendance.php','_self')</script>";


    }
}
?>