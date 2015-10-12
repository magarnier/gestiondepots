<?php
require_once ('sources/controller/route.class.php');

class Router {

    private $url; 
    private $routes = []; 

    public function __construct($url){
        $this->url = $url;
    }

    /**
    * Add the path to the routing system
    * @param String $path Url
    * @param callback $callable code to execute
    *
    * @return string $route added route to routing system
    **/
    public function get($path, $callable){
	    $route = new Route($path, $callable);
	    $this->routes["GET"][] = $route;
	    return $route; 
	}

	/**
    * Run the routing for the current URL
    *
    * @return mixed result of callback
    **/
	public function run(){
	    if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
	        throw new RouterException('REQUEST_METHOD does not exist');
	    }
	    foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
	        if($route->match($this->url)){
	            return $route->call();
	        }
	    }
	    throw new Exception('Page non trouvée');
	}

}