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
            margin:  auto;
            /* margin-top: 90px; */
            border: 1px solid grey;
            /* border-radius: 15px; */
            padding: 40px;
            /* height: 400px; */
            /* background: linear-gradient(to top, rgb(167, 167, 166), rgb(233, 232, 232), rgb(190, 189, 189)); */
	        background-color: rgba(243, 235, 235,0.5);
            
            transition: border-radius 0.25s;
        }

        .main:hover {
            border-radius: 30px;
            /* border: 2px solid black; */
	        background-color: rgba(243, 235, 235,0.7);

            /* box-shadow: 0px -4px 3px 3px rgba(1, 18, 20, 0.5) inset; */

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
            margin-left: 135px;

        }

        .form-select {
            padding: 12px;
            margin-bottom: 25px;
            background: transparent;
        }

        input {
            background: transparent;
            /* color: white; */
        }

        h1 {
            margin-bottom: 35px;
            text-align: center;

        }

        .btn:hover {
            background-color: white;
            color: black;
            border: transparent;
        }

        p {
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Register Here!</h1>

        <div class="form">
            <form action="" method="post">
                <!-- <select name="subject" class="form-select">
                    <option>Select category</option>
                    <option value="Admin">Admin</option>
                    <option value="Teacher">Teacher</option>
                </select> -->
                <input type="text" placeholder="Enter FullName" id="name1" name="name1" class="a" required autocomplete="off"><span id="i1" style="color: brown;"></span>
                <input type="email" placeholder="Enetr Email Address" id="email" name="email" class="a" required autocomplete="off"><span id="i2" style="color: brown;"></span>
                <select name="department" class="form-select">
                    <option>Select Department</option>
                    <option value="Admin">cse</option>
                    <option value="Teacher">it</option>
                    <option value="Teacher">it</option>
                    <option value="Teacher">it</option>
                    <option value="Teacher">it</option>
                    <option value="Teacher">it</option>
                </select>
                <input type="number" placeholder="Enter Mobile No." id="phno" name="phno" class="a" required autocomplete="off"><span id="i3" style="color: brown;"></span>
                <input type="text" placeholder="username" name="name" id="name" class="a" required autocomplete="off"><span id="i4" style="color: brown;"></span>
                <input type="password" placeholder="Create Password" id="pwd" class="a" name="pwd" required autocomplete="off"><span id="i5" style="color: brown;"></span>
                <input type="password" placeholder="Confirm Password" id="cpwd" class="a" name="cpwd" required autocomplete="off"><span id="i6" style="color: brown;"></span>
                <input type="submit" name="Submit" value="submit" class="btn" onclick="return validateform()">
                <p>Already have an account?<a href="./login.php">Signin</a>&nbsp&nbsphere.</p>
            </form>
        </div>
    </div>












    <script>
        function validateform() {

            var val = true;
            // const form = document.getElementById('form');
            var u1 = document.getElementById("name1");
            var u2 = document.getElementById("name");
            var d1 = document.getElementById("phno");
            var c = document.getElementById("cpwd");
            var p = document.getElementById("pwd");
            var e = document.getElementById("email");

            var regx2 = /^[a-zA-Z ]{2,30}$/;
            var regx = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            if (u1.value.trim() == '') {
                u1.style.border = "0.2px solid red";
                document.getElementById("i1").innerHTML = "fill it!";
                val = false;
            } else if (!regx2.test(u1.value)) {
                document.getElementById("i1").innerHTML = "name must contain only alphabets!";
                val = false;
            } else {
                u1.style.border = "";
                document.getElementById("i1").innerHTML = "";
            }

            if (u2.value.trim() == '') {
                u2.style.border = "0.2px solid red";
                document.getElementById("i4").innerHTML = "fill it!";
                val = false;
            } else {
                u2.style.border = "";
                document.getElementById("i4").innerHTML = "";
            }
            if (d1.value.trim() == '') {
                d1.style.border = "0.2px solid red";
                document.getElementById("i3").innerHTML = "fill it!";
                val = false;
            } else {
                d1.style.border = "";
                document.getElementById("i3").innerHTML = "";
            }
            if (c.value.trim() == '') {
                c.style.border = "0.2px solid red";
                document.getElementById("i6").innerHTML = "fill it!";
                val = false;
            } else {
                c.style.border = "";
                document.getElementById("i6").innerHTML = "";
            }
            if (p.value.trim() == '') {
                p.style.border = "0.2px solid red";
                document.getElementById("i5").innerHTML = "fill it!";
                val = false;
            } else {
                p.style.border = "";
                document.getElementById("i5").innerHTML = "";
            }
            if (e.value.trim() == '') {
                e.style.border = "0.2px solid red";
                document.getElementById("i2").innerHTML = "fill it!";
                val = false;
            } else if (!regx.test(e.value)) {
                document.getElementById("i2").innerHTML = "invalid!";
                val = false;
            } else {
                e.style.border = "";
                document.getElementById("i2").innerHTML = "";
            }

            return val;
        }
    </script>
</body>

</html>


<?php
if (isset($_POST['Submit'])) {
    $uname = $_POST['name'];
    $email = $_POST['email'];
    $pswd = $_POST['pwd'];
    // $hash_pswd=password_hash($pswd,PASSWORD_DEFAULT);
    $cpswd = $_POST['cpwd'];
    $phno = $_POST['phno'];
    $name1 = $_POST['name1'];
    $dept = $_POST['department'];

    $sel = "select * from teacherlogin where usname='$uname'";

    $resss = mysqli_query($con, $sel);
    $num = mysqli_num_rows($resss);
    if ($num > 0) {
        echo "<script>alert('username already exists')</script>";
    } elseif ($pswd != $cpswd) {
        echo "<script>alert('password doesnt match')</script>";
    } else {
        $insert_query = "insert into teacherlogin(usname,passwrd,fullname,dept,email) values ('$uname','$pswd','$name1','$dept','$email')";
        $res = mysqli_query($con, $insert_query);
        if ($res) {
            echo "<script>alert('data inserted')</script>";
        } else {
            die(mysqli_error($con));
        }
    }
}

?>