<?php
include_once("conn.php");
$title=$_GET['title'];
$image=$_GET['image'];
$author=$_GET['author'];
$sql="INSERT INTO LIST (id,title,image,author) values (null,'$title','$image','$author');";
$res=$conn->query($sql);
if($res==true){
    header("location:index.php");
}
else{
    echo ("insertion failed");
}

?>