<?php
namespace nsp2;
class SinhVien{
    public $ten;
    public $tuoi;
    public function __construct($ten,$tuoi) {
        $this->ten = $ten;
        $this->namsinh = $tuoi;
    }
    public function hienthithongtin(){
        echo "ten".$this->ten."<br>";
        echo "tuoi".$this->tuoi."<br>";
    }
}