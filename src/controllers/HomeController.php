<?php

namespace Source\controllers;

use Source\models\Notice;

class HomeController
{
    public function index() {
        var_dump((new Notice)->get());
    }

    public function show(string $email):void {
        var_dump((new Notice)->getByEmail($email));
    }
}