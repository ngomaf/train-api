<?php

error_reporting(E_ALL);
ini_set("display_errors", 1); // 1

require "../vendor/autoload.php";

use Source\controllers\HomeController;


echo "<h1>Hi man!</h1>";
echo "<pre>";
(new HomeController)->index();
echo "</pre>";

/*
GET: http://localhost:8100/api/user


POST: http://localhost:8100/api/user
body/raw
{
  "name": "John Doe",
  "email": "john@example.com"
}


PUT: http://localhost:8100/api/user
body/raw
{
  "id": 32,
  "name": "Jane Smit Doe",
  "email": "jane@example.com"
}

DELETE: http://localhost:8100/api/user
body/raw
{
  "id": 1
}


 */
