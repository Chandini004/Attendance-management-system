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
        .containr {
            margin-top: 100px;
        }

        form {
            margin-left: 0px;
        }

        .f1 {
            display: flex;
            margin-left: 0px;
            /* justify-content: space-evenly; */
            margin-top: 40px;
            /* background-color: antiquewhite; */
            width: 100vw;
        }

        .a {
            font-size: 18px;
            margin-right: 3px;
            margin-left: 330px;
        }

        .b {
            font-size: 18px;
            margin-right: 3px;
        }

        #sec {
            border: transparent;
            border-bottom: 2px solid gray;
            padding: 5px;
            padding-left: 20px;
            width: 250px;
            /* border-radius: 7px; */

            margin-right: 40px;
        }

        #dept,
        #date {
            border: transparent;
            border-bottom: 2px solid gray;
            padding: 5px;
            padding-left: 20px;
            width: 250px;
            /* border-radius: 7px; */

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
    </style>
</head>

<body>
    <div class="container" style="width:100vw;margin-left:-50px;">
        <h2 style="margin-left:550px">ATTENDANCE FORM</h2><br>
        <form action="" method="post">
            <div class="f1">
                <label for="batch" class="a">Semister:</label>
                <input type="text" name="sem" id="sec" placeholder="Enter Semister Number">
                <label for="dept" class="b">Department:</label>
                <input type="text" name="dept" id="dept" placeholder="Enter Department Name">
                <!-- <select name="subject" class="form-select">
                <option>Select course</option>
                <option value="Icecream">DAA</option>
                <option value="Drink">WCD</option>
                <option value="Chips">DBMS</option>
                <option value="Pizza">OS</option>
                <option value="Burger">COA</option>
                <option value="Sandwich">ECCC</option>
            </select> -->
            </div>
            <div class="f1">
                <label for="sec" class="a">Section:</label>
                <input type="text" name="sec" id="sec" placeholder="Enter Section Number">
                <label for="date" class="b">Date:</label>
                <input type="date" name="date" id="date" placeholder="Enter Department Name">
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

                    <!-- <th scope="col">Email</th> -->
                    <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['submit'])) {
                    $sem = $_POST['sem'];
                    $dpt = $_POST['dept'];
                    $sec = $_POST['sec'];
                    $d = $_POST['date'];
                    $radio = 0;
                    $i = 0;
                    $sql = "select * from stddetails where sem='$sem' and dept='$dpt' and section='$sec'";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $id = $row['regno'];
                        $name = $row['sname'];
                        $dept = $row['dept'];
                        $sect = $row['Section'];
                        $semm = $row['sem'];
                        // $data=$row['multipledata'];
                        // $allData=implode(",",$data);
                        echo '<tr>
              <th scope="row">' . $id . '<input type="hidden" name="stat_id[]" value="' . $id . '"></th>
              <td>' . $name . '</td>
              <td>' . $dept . '</td>
              <td>' . $semm . '</td>
              <td>' . $sect . '</td>
    <td>' . '<Span style="color: blue;"><input type="radio" name="st_status[' . $radio . ']">P&nbsp&nbsp&nbsp</Span><span style="color: red;"><input type="radio" name="st_status[' . $radio . ']">A</span>' . '</td>

              </tr>';
                        $radio++;
                    }
                }

                ?>
            </tbody>
        </table>
        <br>
        <input type="submit" class="btn btn-dark" id="btnn" value="Save!" name="submit" />

    </div>
</body>

</html>

<?php
if (isset($_POST['att'])) {

    // $course = $_POST['whichcourse'];

    foreach ($_POST['st_status'] as $i => $st_status) {

        $stat_id = $_POST['stat_id'][$i];
        //   $dp = date('Y-m-d');
        //   $course = $_POST['whichcourse'];
        $qry = "select * from stddetails where regno='$stat_id'";
        $result = mysqli_query($con, $qry);
        $row1 = mysqli_fetch_assoc($result);
        $sname = $row1['sname'];
        $sdept = $row1['dept'];
        $ssem = $row1['sem'];
        $ssection = $row1['Section'];


        $stat = "insert into attendance(regno,sname,dept,sem,section,date,status) values('$stat_id','$sname','$sdept','$ssem','$ssection','$d','$st_status')";
        $result1 = mysqli_query($con, $stat);
        if ($result1) {
            echo "<script>alert('saved!')</script>";
        }
    }
}

?>