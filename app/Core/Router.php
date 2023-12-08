<?php

namespace DonaMaria\Core;

class Router{

    protected static array $rotas = [];

    public function add(string $rota, string $controller, string  $acao)
    {
        $rota = ltrim($rota, '/');
        echo $rota;
        static::$rotas[$rota] = [$controller,$acao];

    }
}