<?php
namespace App\Models;

// Đảm bảo đúng tên namespace và class
class ListModel extends DB {
    public function getlistkh(){
        $sql = "SELECT * FROM `khachhang`";
        return $this->getData($sql);
    }
}
