<?php
require_once "models/products.php";

function listProduct() {
    $products = getProducts();
    include "views/Products/products.php";
    

    echo "Đây là trang danh sách product";
}

function addProduct() {
    echo "Đây là trang thêm product";
}

function editProduct() {
    echo "Đây là trang sửa product";
}