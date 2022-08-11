<?php
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// css and js
$router->get('/public/([A-Za-z0-9-_\.]+).([A-Za-z0-9-_\.]+)', function($file){
  echo(file_get_contents("./public/$file"));
});

// tela inicial
$router->all('/', function () {
  $page = "";
  require_once('./pages/Base.php');
});

$router->get("/carros", function () {
  $page = "cars";

  require_once("./pages/Base.php");
});

$router->get("/motos", function () {
  $page = "motorcycles";

  require_once("./pages/Base.php");
});

$router->get("/caminhoes", function () {
  $page = "trucks";

  require_once("./pages/Base.php");
});

$router->set404('/', function() {
  echo('404 NOT FOUND');
});

// Run it!
$router->run();
