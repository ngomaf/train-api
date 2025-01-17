<?php

error_reporting(E_ALL);
ini_set("display_errors", 1); // 1

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

require "../../vendor/autoload.php";

use Source\models\Notice;

$requestMethod = $_SERVER['REQUEST_METHOD'];
// $requestMethod = '';

if($requestMethod == "GET") {
    $list = (new Notice)->get();
    // $list = null;

    if($list) {
        $data = [
            'status' => 200,
            'message' => 'List Fetched Successfully',
            'data' => $list
        ];
        header("HTTP/0.1 200 OK");
        echo json_encode($data);
    } else {
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error'
        ];
        header("HTTP/0.1 500 Internal Server Error");
        echo json_encode($data);
    }
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . 'Method Not Allowed'
    ];
    header("HTTP/0.1 405 Method Not Allowed");
    echo json_encode($data);
}


?>