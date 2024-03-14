<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        listProduct();
       
    break;
    case 'add-product':
        addProduct();
    break;
    case 'edit-product':
        editProduct();
    break;
    // nếu như case = add-product trỏ vào hàm addProduct
    // nếu như case = edit-product trỏ vào hàm editProduct
    // tạo 1 controller CustomerController và gọi case ở trang
    // này luôn  làm y như product

    // tạo ra 1 bảng customer gồm các trường Dữ liệu
    //id ten_kh tuoi
    // xây dựng các chức năng thêm sửa xóa, hiển thị bảng khách hàng;
}