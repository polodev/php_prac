<?php
class Router {
  protected $routes;
  public static function load($routes){
    $router = new static;
    require $routes;
    return $router;
  }
  public function define($routes){
    $this->routes = $routes;
  }
  public function direct ($uri) {
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    } 
    return 'views/404.php';
  }
}
