<?php
include('../connect.php');

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
        body{
    background: linear-gradient(to left,rgb(76, 75, 75),rgb(158, 157, 157),rgb(218, 214, 214),rgb(201, 199, 199),rgb(233, 230, 230),rgb(167, 163, 163),rgb(77, 75, 75));
}
      
        form {
            margin-left: 180px;
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

        .table{
            margin-left: 150px;
        }
    </style>
</head>

<body>
    <div class="container" style="width:100vw;margin-left:-50px;">
        <h2 style="margin-left:550px">ATTENDANCE REPORTS</h2><br>
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
                        <th scope="col">percentage</th>
                    </tr>
                </thead>
                <tbody>
                <?php
      if(isset($_POST['submit'])){
        $b=$_POST['sem'];
        $d=$_POST['dept'];
        $s=$_POST['sec'];
        $sql = "select * from stddetails where sem='$b' and dept='$d' and Section='$s'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['regno'];
          $name = $row['sname'];
          $dept = $row['dept'];
          $batch = $row['Section'];
          $sem = $row['sem'];
          // $data=$row['multipledata'];
          // $allData=implode(",",$data);
          $sql1="select * from stdattendance where regno='$id'";
          $res1=mysqli_query($con,$sql1);
          $n1=mysqli_num_rows($res1);
          $sql2="select * from stdattendance where regno='$id' and status='Present'";
          $res2=mysqli_query($con,$sql2);
          $n2=mysqli_num_rows($res2);
          $perc=($n2*100)/$n1;
          echo '<tr>
              <th scope="row">' . $id . '</th>
              <td>' . $name . '</td>
              <td>' . $dept . '</td>
              <td>' . $sem . '</td>
              <td>' . $batch . '</td>
              <td>' . $perc . '</td>
              </tr>';
      }
      }

    ?>
                   
                </tbody>
            </table>
       
    </div>
</body>

</html>