<?php
$userDB = "php";
$passDB = "php";
$hostDB = "localhost";
$nameDB = "ex_login";


$conn = new mysqli($hostDB,$userDB,$passDB,$nameDB);

if ($conn->connect_errno) {
    die ("ERROR : ". $conn->connect_error);
} else {
    //echo ("Connected");
}

?>
