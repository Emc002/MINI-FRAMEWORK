<?php
use Staditek\App\Controller\HomeController;
use Staditek\App\Controller\ViewController;
use Staditek\App\Core\View; 
use Staditek\App\Core\Router; 

require_once __DIR__ . '/../vendor/autoload.php';


Router::addRoute('GET', '/', HomeController::class,'index',[]);
Router::addRoute('GET', '/view', HomeController::class,'view',[]);

Router::run();
// Router::View('GET', '/', ViewController::class,'index',[]);
// Router::runView();