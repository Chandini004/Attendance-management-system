<?php

session_start();

if(!$_SESSION['uname'])
{
  header('location: ../login.php');
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-sizing: border-box;
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
        .container{
            width: 100%;
            height: 100vh;
            position: absolute;
            margin-top: 100px;
            /* background-color: aqua; */
            color: black;
        }
        form{
            margin-left: 150px;
            margin-top: 40px;
        }
        label{
            font-size: 18px;
            margin-right:3px;
        }
        #batch,#dept{
            border: transparent;
            border-bottom: 2px solid black;
            padding: 5px;
            padding-left: 20px;
            width: 250px;
            /* border-radius: 7px; */
            margin-right: 50px;
        }
        table{
            margin-left: 80px;
        }
/* .btn{
    width: 120px;
    height: 33px;
    border-radius: 7px;
    background-color:gray;
    color: white;
    font-size: 18px;
    font-weight: 600;
    border: none;

} */
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
                    <li style="color:aliceblue;margin-right: 400px;font-size: 18px;"> <?php 
                    
                    if(!isset($_SESSION['uname'])){
                        echo "WELCOME GUEST";
                    }else{
                        echo "WELCOME  ADMIN";
                    }
                        
                    ?></li>
                    <li><a href="index.php?insertfac">INSERT FACULTY</a></li>
                    <li><a href="index.php?insertstd">INSERT STUDENT</a></li>
                    <li><a href="index.php?student">STUDENTS</a></li>
                    <li><a href="index.php?faculty">FACULTIES</a></li>
                    
                    <li><a href="../logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
<!-- <div class="container">
<h2 style="text-align: center;">STUDENTS LIST</h2><br>
<form action="" method="post">
    <label for="batch">Batch:</label>
    <input type="text" name="batch" id="batch" placeholder="Enter Batch Number">
    <label for="dept">Department:</label>
    <input type="text" name="dept" id="dept" placeholder="Enter Department Name">
    <input type="submit" name="submit" value="Search" class="btn btn-dark">
</form>
<br>
<br>
<center>
    <table class="table table-stripped table-hover">
      <thead>
        <tr>
          <th scope="col">Registration No.</th>
          <th scope="col">Name</th>
          <th scope="col">Department</th>
          <th scope="col">Batch</th>
          <th scope="col">Semester</th>
          <th scope="col">Email</th>
        </tr>
      </thead>


      <tbody>
     <tr>
       <td>jqjsm, n</td>
    <td>hsjk</td>
       <td>hsjhjsh</td>
       <td>jsj,sb</td>
       <td>ksjkasj</td>
       <td>hsksjs</td>
     </tr>
  </tbody>
    </table>
    </center>
</div> -->

<?php
    // get_user_order_details();
    
    if(isset($_GET['student']))
    {
        include("../teacher/student.php");
    }
    else if(isset($_GET['faculty']))
    {
        include("../teacher/faculty.php");
    }
    else if(isset($_GET['insertfac']))
    {
        include("insertTeacher.php");
    }
    else if(isset($_GET['insertstd']))
    {
        include("insertStd.php");
    }
    else{
        include("../teacher/student.php");
    }
    ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>