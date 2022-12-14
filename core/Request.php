<?php
namespace cursophp7dc\core;

class Request
{
    public static function uri() //devuelve la uri, elimina las barras de delante y detrás de la url
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}