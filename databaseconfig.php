<?php 

$con = new mysqli("localhost","root","","yatra");

if($con->connect_error){
    die("connection failed!".$con->connect_error);
}
?>