<?php

// $router->register([
//     ""=>"controllers/IndexController.php",
//     "about"=>"controllers/AboutController.php",
//     "contact"=>"controllers/ContactController.php",
//     "order" => "controllers/OrderController.php",
//     "names" => "controllers/add-name.php"
// ]);

// $router->get("","PagesController@home");
// $router->get("about","PagesController@about");
// $router->get("contact","PagesController@contact");
// $router->get("order","PagesController@order");
// $router->post("names","PagesController@createUser");

use controllers\PagesController;

$router->get('',[PagesController::class,'home']);
$router->get('about',[PagesController::class,'about']);
$router->get('contact',[PagesController::class,'contact']);
$router->get('order',[PagesController::class,'order']);
$router->post('names',[PagesController::class,'createUser']);





