<?php

namespace core;

class Router
{
    public $data;
    public $data2;

    public function run()
    {
        return var_export(get_object_vars($this));
    }
}