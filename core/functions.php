<?php

function dd($data){
    die(var_dump($data));
};

function view($name,$data=[]){
    extract(
        $data);
    return require "views/$name.view.php";
}

function redirect($uri){    
    header("location: $uri");
}

function request($name){
    if($_SERVER['REQUEST_METHOD']=== 'GET'){
        return $_GET[$name];
    }

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        return $_POST[$name];
    }
}