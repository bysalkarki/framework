<?php
require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$application=new Application(dirname(__DIR__));
$application -> router -> get('/', [new SiteController(), 'home']);
$application -> router -> get('/contact', [new SiteController(), 'contact']);

$application -> router -> get('/login', [new AuthController(), 'login']);
$application -> router -> post('/login', [new AuthController(), 'login']);
$application -> router -> get('/register', [new AuthController(), 'register']);
$application -> router -> post('/register', [new AuthController(), 'register']);

$application -> run();
