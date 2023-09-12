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
</style>
</head>

<body class="bg-light text-dark">
    <div class="container mt-5">
        <h1 class="title">Insert Faculty Details</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-2 w-50 m-auto">
                <label for="fname" class="form-label">Faculty Name</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="enter faculty name" autocomplete="off" required>
            </div>

            <div class="form-outline mb-2 w-50 m-auto">
                <label for="deprt" class="form-label">Department</label>
                <input type="text" name="deprt" id="deprt" class="form-control" placeholder="enter department name" autocomplete="off" required>
            </div>

            <div class="form-outline mb-2 w-50 m-auto">
                <label for="profession" class="form-label">Role</label>
                <input type="text" name="prfn" id="profession" class="form-control" placeholder="enter role of employee" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="slry" class="form-label">Salary</label>
                <input type="number" name="slry" id="slry" class="form-control" placeholder="enter salary" autocomplete="off" required>
            </div>
            
            <div class="form-outline mb-4 mt-2 w-50 m-auto">
                <label for="product_image1" class="form-label">Faculty Image</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" autocomplete="off" required>
            </div>

            <div class="form-outline  w-50 m-auto">
                <input type="submit" value="Save!" name="insert_product" class="btn btn-dark">
            </div>


        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['insert_product']) and isset($_FILES['product_image1'])) {


    $fname = $_POST['fname'];
    $deprt = $_POST['deprt'];
    $slry = $_POST['slry'];
    $prfn = $_POST['prfn'];
    $status = "true";

    $product_image1 = $_FILES['product_image1'];
    $imagefilename = $product_image1['name'];
    $imagefiletemp = $product_image1['tmp_name'];
    $fname_seperate = explode('.', $imagefilename);
    $file_ext = strtolower(end($fname_seperate));
    $ext = array('jpeg', 'jpg', 'png');
    if (in_array($file_ext, $ext)) {
        $upload = '../images/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload);
    }

    if ($fname == '' or   $deprt== '' or $slry == '' or  $prfn== '' or $product_image1 == '') {
        echo "<script>alert('enter all')</script>";
        exit();
    } else {
        $insert = "insert into facultydetails (fname,department,role,salary,image) 
        values('$fname','$deprt','$prfn','$slry','$upload')";
        $ress = mysqli_query($con, $insert);
        if ($ress) {
            echo "<script>alert('succesfull')</script>";
        } else {
            echo "<script>alert('unnnnnnsuccesfull')</script>";
        }
    }
}



?>