<?php
namespace App\Models;
class DeleteModel extends db{
public function getdeletekh($id){
    $sql="DELETE FROM khachhang WHERE `khachhang`.`kh_id` = {$id}";
    return $this->getData($sql,false);
}}