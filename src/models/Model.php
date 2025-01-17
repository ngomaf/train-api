<?php

namespace Source\models;


abstract class Model
{
    protected string $table;

    abstract protected function get();
}