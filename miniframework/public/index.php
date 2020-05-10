<?php
    require_once "../vendor/autoload.php";

    $route = new \App\Route;
    echo 'Iniciando a configuração de rotas do miniframework';
    echo "<hr>";
    echo "<pre>";
    print_r($route->getUrl());
    echo "</pre>";
?>