<?php
session_start();
unset($_SESSION['student_id']);
session_unset();
session_destroy();
echo "<script>window.location.href='index';</script>";

?>