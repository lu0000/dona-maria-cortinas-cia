<?php
declare(strict_types=1);

require_once 'app/Controllers/HomeController.php';
require_once 'app/Controllers/LoginController.php';
require_once 'app/Controllers/ErroController.php';
require_once 'app/Core/Router.php';

/*use DonaMaria\Controllers\ErroController;
use DonaMaria\Controllers\HomeController;
use DonaMaria\Controllers\LoginController;*/
use DonaMaria\Core\Router;

require __DIR__ . "/vendor/autoload.php";
/*require __DIR__ . "/app/config.php";
require __DIR__ . "/app/rotas.php";
*/
function css(string $arquivo)
{
    return "http://localhost/dona-maria-cortinas-cia/public/css/{$arquivo}.css";
}


const PASTA_VIEW = "./app/Views/";
const NS_CONTROLLERS = "\\DonaMaria\\Controllers\\";

$url = $_GET['url'] ?? "";
$url = "/".$url;
/*
Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
Router::add('/cadastro','CadastroController','Login');
Router::add('__erro','ErroController','criarconta');
*/

$rotas = [];
$rotas['/'] = ["HomeController","index"];
$rotas['/login'] = ["LoginController","login"];
$rotas['/cadastro'] = ["LoginController","criarconta"];
$rotas['__erro'] = ["ErroController","erro404"];


if( array_key_exists($url,$rotas)){
    [$controller,$metodo] = $rotas[$url];
}else{
    [$controller,$metodo] = $rotas['__erro'];
}

CarregaController($controller,$metodo);

function carregaController($controller,$metodo)
{
    $controller = NS_CONTROLLERS . $controller;
    $ctr = new $controller();
    $ctr->$metodo();
}