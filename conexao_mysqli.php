<?php

$localhost = "localhost";
$user = "root";
$password = "";
$db = "login";

$connect = mysqli_connect($localhost, $user, $password, $db);

$sql = mysqli_query($connect, "SELECT * FROM tb_usuarios");

echo mysqli_num_rows($sql);





