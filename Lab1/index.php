<?php

// require_once "app/controllers/ListController.php";
// require_once "app/controllers/AddController.php";
// require_once "app/controllers/EditController.php";
// require_once "app/controllers/DeleteController.php";

// require "env.php";
require_once "vendor/autoload.php";
require_once "common/route.php";
use App\Models\Add;
use App\Models\Delete;
use App\Models\Edit;
use App\Models\List;
use App\Models\DB;
use App\Controllers\AddController;
use App\Controllers\DeleteController;
use App\Controllers\EditController;
use App\Controllers\ListController;

// use App\Controllers\CustomerController;
// $url = isset($_GET['url']) ? $_GET['url'] : "/";
// switch ($url) {
//     case '/':
//         $produut = new ListController();
//         $produut->listkh();
//     break;
//     case 'AddController':
//         $produut = new AddController();
//         $produut->addkh();
//     break;
//     case 'update':
//         $produut = new EditController();
//         $produut->update();
//         break;
//     case 'DeleteController':
//         $produut = new DeleteController();
//         $produut->deletekh();
//     break;
//     case 'list':
//         // listkh();
//         break;
//    case 'edit':
//     $produut = new EditController();
//     $produut->edit();
//     break;
// }