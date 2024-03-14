<?php
namespace App\Models;
 class Product extends BaseModel
{
    public $sql;
    public function getlistkh(){
        $this->sql = "SELECT * FROM `khachhang`";
        return $this->getData($this->sql);
    }

    public function geteditkh($id, $ten, $tuoi) {
        // Code cập nhật dữ liệuoikh, ở đây, sử dụng cả $tenkh và $tuoikh
        $this->sql="UPDATE `khachhang` SET `tenkh` = '{$ten}', `tuoikh` = '{$tuoi}' where `khachhang`.`kh_id` ='$id';";
        return $this->getData($this->sql,false);
    }
    
    public function getselect($id_edit){
       
        $this->sql = "SELECT * FROM `khachhang` WHERE `khachhang`.`kh_id`='$id_edit'";
        return $this->getData($this->sql);
    }
    public function getdeletekh($id){
        $sql="DELETE FROM khachhang WHERE `khachhang`.`kh_id` = {$id}";
        return $this->getData($sql,false);
    }
    public function getadd($tenkh,$tuoikh){
        $this->sql="INSERT INTO `khachhang`(`tenkh`,`tuoikh`) VALUES ('$tenkh','$tuoikh')";
        return $this->getData($this->sql,false);
     }
}
