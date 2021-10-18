<?php
//Необходимо создать в папке core класс Router

//В Router создать метод run() который будет через var_export выдавать свойства класса.

//Необходимо подключить в index.php используя namespace класс Router

require_once 'vendor/autoload.php';

use core\Router;
use app\controllers\Controller;


$r = new Router();
$r->data = 3;
$r->data2 = 31;
$r->data3 = 56;

return $r->run();