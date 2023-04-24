<?php
include("./../admin/conn.php");
header('Content-Type:application/json');
if($_SERVER['REQUEST_METHOD']=="PUT"){
        $response=array("message"=>"content updated","success"=>true);
        echo json_encode($response);
    }
    else{
        http_response_code(404);
        $response=array("message"=>"error","success"=>false);
        echo json_encode($response);
        die();
    }

?>