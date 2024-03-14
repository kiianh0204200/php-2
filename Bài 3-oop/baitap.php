<?php 
//tạo 1 class GiangVien gồm các thuộc tính :
// maGV,tenGV,namBatDau,luongCB,soGioDay
//tạo phương thức set cho các thuộc tính ở trên
// tạo phương thức hienThiThongTinGV gồm đầy đủ thông tin
// khởi tạo 1 đối  tượng gv và thực hiện gọi hàm set và
//hàm hiển thị thông tin GV ra

class GiangVien {
    public $maGV;
    public $tenGV;
    public $namBatDau;
    public $luongCB;
    public $soGioDay;
    public function setmaGV($ma){
        $this->maGV = $ma;
    }
    public function settenGV($ten){
        $this->tenGV = $ten;
        
    }
    public function setnamBatDau($nam){
        $this->namBatDau = $nam; 
        
    }
    public function setluong($luong){
        $this->luongCB = $luong;
        
    }
    public function setgio($gio){
        $this->soGioDay = $gio;
        
    }
    public function luong(){
        return $this->luongCB * $this->soGioDay;
    }

    public function hienThiThongTinGV(){
        echo $this->maGV."<br>".$this->tenGV."<br>".$this->namBatDau."<br>".$this->soGioDay."<br>".$this->luong();
    }
}


$gv1 = new GiangVien();

$gv1 -> setmaGV("gv1121");
$gv1 -> settenGV("KY Anh ");
$gv1 -> setnamBatDau("2002");
$gv1 -> setluong("200000 ");
$gv1 -> setgio("29"); 
$gv1 -> hienThiThongTinGV();