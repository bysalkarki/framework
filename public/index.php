<?php
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$application=new Application();
$application -> router -> get('/', function () {
    echo 'hello World';
});
$application -> router -> get('/contact', function () {
    echo 'hello contact';
});
$application -> run();
