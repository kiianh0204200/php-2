<?php
// tạo 1 class là Crush có những thuộc tính sau :
//$ten,$namSinh,$moiQuanHe,$diaChi,$email
// yêu cầu
// xây dựng phương thức khởi tạo có tham số truyền vào cho các thuộc tính trên
// xây dựng hàm tính tuổi có trả về = năm hiện tại - năm sinh
//xây dựng hàm kiemTraDoTuoiLayChong như sau
// nếu tuổi của crush >= 18  => đủ tuổi  lấy chồng
//nếu tuổi của crush < 18 Không đủ tuổi lấy chồng
// xây dựng hàm hiển thị thông tin crush  gồm :
//$ten-$namSinh-$moiQuanHe-$diaChi-$email-tuổi- đủ tuổi lấy chồng
class Crush{
    public $ten;
    public $namSinh;
    public $moiQuanHe;
    public $diaChi;
    public $email;

    public function __construct($ten,$namSinh,$moiQuanHe,$diaChi,$email){
        $this->ten = $ten;
        $this->namSinh = $namSinh;
        $this->moiQuanHe = $moiQuanHe;
        $this->diaChi = $diaChi;
        $this->email = $email;
    }

    public function tuoi(){
       return date('Y')-$this->namSinh;
    }
    public function settuoi(){
        $settuoi = $this->namSinh;
        if($settuoi <= 18){
            return " Chưa đủ tuổi lấy chồng";
        }else{
            echo "Húp";
        }

    }
    public function hienthi(){
        echo $this->ten."-".$this->namSinh."-".$this->moiQuanHe."-".$this->diaChi."-".$this->email."-".$this->tuoi()."-".$this->settuoi();

    }
}
$cr1 = new Crush("nguyễn thị A",2000,"Y","Hòa Bình","kianh02042000@gmail.com");
$cr1 -> hienthi();