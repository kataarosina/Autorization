<?php
$link = 'localhost:8012';
$user = 'root';
$db_name = 'lab_6_db';
$connection = mysqli_connect($link, $user);
$select_db = mysqli_select_db( $connection, $db_name);

 ?>