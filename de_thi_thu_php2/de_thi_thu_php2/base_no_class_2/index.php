<?php
session_start();

require_once 'env.php';
require_once 'app/controllers/ProductController.php';
echo getProduct();


//require_once 'vendor/autoload.php';
////require_once 'commons/db.php';
//require_once 'commons/route.php';

?>