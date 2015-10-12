<?php

class Route {

    private $path;
    private $callable;
    private $matches = [];
    private $params = [];

    public function __construct($path, $callable){
        $this->path = trim($path, '/'); 
        $this->callable = $callable;
    }

    /**
    * Transform the URL parameters into an array
    * @param $url String $url to tranform
    *
    * @return bool 
    **/
    public function match($url){
        $url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }
        array_shift($matches);
        $this->matches = $matches; 

        return true;
    }

    /**
    * Call the callable with params
    * @param callale $this->callable Code to execute
    * @param array $this->matches parameters list
    *
    * @return mixed result of callback
    **/
    public function call(){
        return call_user_func_array($this->callable, $this->matches);
    }

}