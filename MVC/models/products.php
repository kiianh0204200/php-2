<?php
require_once "models/db.php";
// xây dwungj hàm truy vấn để ấy danh sách sẩn phảm
function getProducts(){
    $sql="SELECT * FROM product";
    return getData($sql);
}