<?php
include("./../admin/conn.php");
header('Content-Type:application/json');
if($_SERVER['REQUEST_METHOD']=="POST"){

    $request=json_decode(file_get_contents("php://input"));

$title=$request->title;
$image=$request->image;
$author=$request->author;

    $sql="INSERT INTO list (id,title,image,author) values(null,'$title','$image','$author')  ";
    $res=$conn->query($sql);
    
    if($res===TRUE){
        $response=array("success"=>true);
    }
    else{
        $response=array("success"=>false);
    }
    
    
    echo json_encode($response); 
    }
    else{
        http_response_code(404);
        $response=array("message"=>"error","success"=>false);
        echo json_encode($response);
        die();
    }
?>