<?php
namespace App\Models;
 require_once "db.php";
class AddModel extends db{
 public function getadd($tenkh,$tuoikh){
    $sql="INSERT INTO `khachhang`(`tenkh`,`tuoikh`) VALUES ('$tenkh','$tuoikh')";
    return $this->getData($sql,false);
 }
}