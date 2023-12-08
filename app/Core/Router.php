<?php

namespace DonaMaria\Core;

class Router{

    protected static array $rotas = [];

    public function add(string $rota, string $controller, string  $acao)
    {
        static::$rotas[$rota] = [$controller,$acao];

    }
}