<?php

class Router
    {
        public static function load($fileName)
        {
            $router = new Router();
            require $fileName;
            return $router;
        } 
        public $routes=[
            "GET" =>[],
            "POST" => []
        ];

        public function get($uri,$controller)
        {
            $this->routes['GET'][$uri]=$controller;    
        }

        public function post($uri,$controller)
        {
            $this->routes['POST'][$uri]=$controller;
        }

        public function direct($uri,$method)
        {
             if(!array_key_exists($uri,$this->routes[$method])){
                
                die("404 page");
                
             }
             $explosion =$this->routes[$method][$uri];
             $this->callMethod($explosion[0],$explosion[1]);
             
        }

        public function callMethod($class,$method)
        {
            $class = new $class;
            $class->$method();
        }
        
    }

