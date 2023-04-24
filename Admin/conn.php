<?php
$conn= new mysqli("localhost","root","","jokes");
if($conn->connect_error){
    die("connection failed");
}
?>