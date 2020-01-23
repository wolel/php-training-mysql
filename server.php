<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'reunion_island';

$conn = new mysqli($servername,$username,$password);

if ($conn->error){
    echo 'Connection faild'.$conn->connect_error;
}else{
    $conn->select_db($dbname);
    echo "Connection OK &#9829";
}
echo $conn->error;