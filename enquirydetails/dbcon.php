<?php
$conn = mysqli_connect("localhost","root","","schooldb");
if(!$conn){
    die("Database connection error : " . mysqli_connect_error());
}