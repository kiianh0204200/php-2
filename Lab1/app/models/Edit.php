<?php
namespace App\Models;
require_once "app/models/db.php";
class EditModel extends db{
public function geteditkh($id, $ten, $tuoi) {
    // Code cập nhật dữ liệuoikh, ở đây, sử dụng cả $tenkh và $tuoikh
    $sql="UPDATE `khachhang` SET `tenkh` = '{$ten}', `tuoikh` = '{$tuoi}' where `khachhang`.`kh_id` ='$id';";
    return $this->getData($sql,false);
}

public function getselect($id_edit){
   
    $sql = "SELECT * FROM `khachhang` WHERE `khachhang`.`kh_id`='$id_edit'";
    return $this->getData($sql);
}}