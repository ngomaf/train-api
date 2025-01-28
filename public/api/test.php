<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

require "../../vendor/autoload.php";

use Source\models\Notice;

$requestMethod = $_SERVER['REQUEST_METHOD'];
// $requestMethod = '';

if($requestMethod == "GET") {
    if(isset($_GET['email'])) {
        if($_GET['email']) {
            $data = [
                'status' => 200,
                'message' => 'List Fetched Successfully',
                'data' => (new Notice)->getByEmail($_GET['email'])
            ];
            header("HTTP/0.1 200 OK");
            echo json_encode($data);
    
            return;

        } else {
            $data = [
                'status' => 422,
                'message' => 'Enter your e-mail'
            ];
            header("HTTP/0.1 422 Enter your e-mail");
            echo json_encode($data);

            return;
        }
    }

    if($requestMethod) {
        $data = [
            'status' => 200,
            'message' => 'List Fetched Successfully',
            'data' => (new Notice)->get()
        ];
        header("HTTP/0.1 200 OK");
        echo json_encode($data);

        return;
    } 

    $data = [
        'status' => 500,
        'message' => 'Internal Server Error'
    ];
    header("HTTP/0.1 500 Internal Server Error");
    echo json_encode($data);
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . 'Method Not Allowed'
    ];
    header("HTTP/0.1 405 Method Not Allowed");
    echo json_encode($data);
}


?>