<?php
include('../connect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{
    background: linear-gradient(to left,rgb(76, 75, 75),rgb(158, 157, 157),rgb(218, 214, 214),rgb(201, 199, 199),rgb(233, 230, 230),rgb(167, 163, 163),rgb(77, 75, 75));
}
.f1 {
            display: flex;
            margin-top: 40px;
	        box-shadow: 0px -4px 3px 3px rgba(1, 18, 20, 0.5) inset;
            background: linear-gradient(to bottom,rgb(58, 59, 59),rgb(119, 119, 121),rgb(75, 74, 74));
            color:white;
            width: 76vw;
            padding: 40px;
            padding-right: 50px;
            
            transition: border-radius 0.25s;
        }
        .f1:hover{
	        box-shadow:none;
            border-radius: 25px;

        }
        input{
            background: transparent;
        }
</style>
</head>
<body>
<div class="container">
<h2 style="margin-left:550px;">STUDENTS LIST</h2><br>
<form action="" method="post">
  <div class="f1">
    <label for="batch">Semister:</label>
    <input type="text" name="batch" id="batch" placeholder="Enter semister Number">
    <label for="dept">Department:</label>
    <input type="text" name="dept" id="dept" placeholder="Enter Department Name">
    <input type="submit" name="submit" value="Search" class="btn btn-dark">
    </div>
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
          <th scope="col">Section</th>
          <th scope="col">Semester</th>
          <!-- <th scope="col">Email</th> -->
        </tr>
      </thead>
      <tbody>

    <?php
      if(isset($_POST['submit'])){
        $b=$_POST['batch'];
        $d=$_POST['dept'];
        $sql = "select * from stddetails where sem='$b' and dept='$d'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['regno'];
          $name = $row['sname'];
          $dept = $row['dept'];
          $batch = $row['Section'];
          $sem = $row['sem'];
          // $data=$row['multipledata'];
          // $allData=implode(",",$data);
          echo '<tr>
              <th scope="row">' . $id . '</th>
              <td>' . $name . '</td>
              <td>' . $dept . '</td>
              <td>' . $batch . '</td>
              <td>' . $sem . '</td>
              </tr>';
      }
      }

    ?>
  </tbody>
    </table>
    </center>
</div>

</body>
</html>