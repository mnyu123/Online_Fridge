<?php
session_start();
$conn = mysqli_connect("localhost", "root", "1234", "fridge") or die ("Can't access DB");
$conn->set_charset("utf-8");
 ?>
