<?php
// tất cả nhưng cái gì chung cho toàn bộ dự án thì viết ở đây
const DBNAME = "wd18204";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/php-2/bai%204%20-%20nsp/base_mvc/";

function route($url)  {
    return BASE_URL.$url;
}
// xây dựng 1 hàm set lỗi và set thành công
// $key <=> success hoặc errors
// $msg <=> câu thông báo lỗi/thành công

function flash($key,$msg,$route)  {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
        break;
        case 'errors':
            unset($_SESSION['success']);
        break;
    }
    header('location:'.BASE_URL.$route.'?msg='.$key);die;
}