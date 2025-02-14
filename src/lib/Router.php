<?php
class Router
{
  private static $routes = [
    "GET" => [],
    "POST" => [],
    "PUT" => [],
    "DELETE" => [],
  ];
  static function Add($method, $uri, $func)
  {
    $uri = preg_replace('#\{(.*?)\}#', '([^\/]+)', $uri);
    array_push(self::$routes[$method], ["#^$uri$#", $func]);
  }
  static function handleRequest()
  {
    $reqM = $_SERVER['REQUEST_METHOD'];
    $reqU = $_SERVER['REQUEST_URI'];
    foreach (self::$routes[$reqM] as $route) {
      [$uri, $func] = $route;                     
      if (preg_match($uri, $reqU, $matches)) {
        array_shift($matches);
        call_user_func_array($func, $matches);
        return;
      }
    }
  }
}
function GET($uri, $func) {
  Router::Add("GET", $uri, $func);
}
function POST($uri, $func) {
  Router::Add("POST", $uri, $func);
}
function PUT($uri, $func) {
  Router::Add("PUT", $uri, $func);
}
function DELETE($uri, $func) {
  Router::Add("DELETE", $uri, $func);
}