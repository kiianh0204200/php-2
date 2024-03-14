<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

// khu vực cần quan tâm -----------
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    header('location: index.php?url=/list-product');
});
//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('list-product',[App\Controllers\ListController::class,'listkh']);
$router->get('add-product',[App\Controllers\AddController::class,'']);
$router->post('post-product',[App\Controllers\AddController::class,'addkh']);
$router->get('edit-product',[App\Controllers\EditController::class,'edit']);
$router->post('update-product',[App\Controllers\EditController::class,'update']);
$router->get('delete-product',[App\Controllers\DeleteController::class,'deletekh']);
$router->get('detail-product/{id}',[App\Controllers\ProductController::class,'detail']);

$router->post('edit-product/{id}',[App\Controllers\AddController::class,'addkh']);
// khu vực cần quan tâm -----------
//$router->get('test', [App\Controllers\ProductController::class, 'index']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>