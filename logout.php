<?php
session_start();
session_destroy();
echo "<script>window.open('./teacher/index.php','_self')</script>";
?>