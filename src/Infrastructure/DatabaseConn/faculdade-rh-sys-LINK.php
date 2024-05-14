<?php
class FaculdadeRhSysLINK{

$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "faculdade-rh-sys";

$conn = new mysqli($HOST,$USERNAME,$DATABASE,$PASSWORD);

if($conn->connect_errno){
    die("An error occurred when trying to connect to the database:"+ $conn->connect_error);
}else{
    echo '<script>console.log("Hello World!")</script>';
}}


?>