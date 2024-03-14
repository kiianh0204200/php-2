<?php
namespace nsp1;
class SinhVien{
    public $ten;
    public $namsinh;
    public function __construct($ten,$namsinh) {
        $this->ten = $ten;
        $this->namsinh = $namsinh;
    }
    public function hienthithongtin(){
        echo "ten".$this->ten."<br>";
        echo "nam sinh".$this->namsinh."<br>";
    }
}