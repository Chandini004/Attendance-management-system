<?php
include('../connect.php');

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
    <title>insert products</title>
<style>
    .title{
        margin-left: 460px;
    }
    body{
    background: linear-gradient(to left,rgb(76, 75, 75),rgb(158, 157, 157),rgb(218, 214, 214),rgb(201, 199, 199),rgb(233, 230, 230),rgb(167, 163, 163),rgb(77, 75, 75));
}
form{
    margin-top: 40px;
}
</style>
</head>

<body class="bg-light text-dark">
    <div class="container mt-5">
        <h1 class="title">Insert Student Details</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="fname" class="form-label">Student Name</label>
                <input type="text" name="sname" id="fname" class="form-control" placeholder="enter student name" autocomplete="off" required>
            </div>

            

            <div class="form-outline mb-3 w-50 m-auto">
                <label for="profession" class="form-label">Registration Number</label>
                <input type="text" name="reg" id="profession" class="form-control" placeholder="enter registration" autocomplete="off" required>
            </div>
            <div class="form-outline mb-3 w-50 m-auto">
                <label for="deprt" class="form-label">Department</label>
                <input type="text" name="sdeprt" id="deprt" class="form-control" placeholder="enter department name" autocomplete="off" required>
            </div>
            <div class="form-outline mb-3 w-50 m-auto">
            <label for="slry" class="form-label">Semister</label>
                <input type="text" name="sem" id="slry" class="form-control" placeholder="enter semister" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="slry" class="form-label">Section</label>
                <input type="text" name="sec" id="slry" class="form-control" placeholder="enter section" autocomplete="off" required>
            </div>
            

            <div class="form-outline  w-50 m-auto">
                <input type="submit" value="Save!" name="insert_student" class="btn btn-dark">
            </div>


        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['insert_student'])) {


    $sname = $_POST['sname'];
    $sdeprt = $_POST['sdeprt'];
    $sem = $_POST['sem'];
    $reg = $_POST['reg'];
    $sec = $_POST['sec'];
   

    if ($sname == '' or   $sdeprt== '' or $sem == '' or  $sec== '' or $reg== '') {
        echo "<script>alert('enter all')</script>";
        exit();
    } else {
        $insert1 = "insert into stddetails (sname,regno,dept,Section,sem) 
        values('$sname','$reg','$sdeprt','$sec','$sem')";
        $res2 = mysqli_query($con, $insert1);
        if ($res2) {
            echo "<script>alert('succesfull')</script>";
        } else {
            echo "<script>alert('unsuccesfull')</script>";
        }
    }
}



?>