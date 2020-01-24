<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Scubatuba\Page;

$app = new Slim();

$app->get('/', function () {

  $page = new Page();

  $page->setTpl("index");
});
$app->get('/cursos', function () {

  $page = new Page();

  $page->setTpl("cursos");
});
$app->get('/discover-scuba', function () {

  $page = new Page();

  $page->setTpl("discover-scuba");
});
$app->get('/pontos', function () {

  $page = new Page();

  $page->setTpl("places");
});
$app->get('/venda-equipamentos', function () {

  $page = new Page();

  $page->setTpl("sell");
});

$app->run();
