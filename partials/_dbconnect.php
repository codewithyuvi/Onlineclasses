<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "onlineclasses";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "We are not connected to Database because of this Error" .mysqli_connect_error();
}
// else{
//     echo "Successfully Connected to the Database";
// }





?>