<?php

namespace App\Controllers;

use App\Models\Product; // Đảm bảo đúng tên namespace và class

class ListController{
    public function listkh() {
        $products = new Product();
        $product = $products->getlistkh();
        include "views/list.php";
    }}

