<?php

require "../vendor/autoload.php";

use Source\controllers\HomeController;


echo "<h1>Hi man!</h1>";

$url = "http://127.0.0.1:8005/api/user/index.php";


die();

(new HomeController)->index();
(new HomeController)->show('zany.fortuna@hbo.ao');




/*

// Inicializa a sessão cURL
$curl = curl_init();

// Define a URL da API
$url = "http://127.0.0.1:8005/api/user/index.php";

// Define o corpo da requisição como um JSON
$data = ['key' => 'value'];
$data_string = json_encode($data);

// Define as opções da requisição
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

// Envia a requisição e obtém a resposta
$response = curl_exec($curl);

// Fecha a sessão cURL
curl_close($curl);

// Exibe a resposta
echo $response;

*/