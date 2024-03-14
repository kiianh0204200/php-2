<?php
// khai báo class
class SinhVien{
    //Khai Báo thuộc tính tức là khai báo biến trong class
    public $tenSV; 
    public $maSV;
    public $namSinh;
    // phương thức khởi tạo  hoặc là phương thức khởi tạo 
    // phương tức khởi tạo là phương thức đặc biệt xếp vào thành 1 dạng 
    // magic function và nó chỉ được gọi ngay khi khởi tạo đối tượng
    // có 2 phương thức khởi tạo
    // 1 phương thức khởi tạo cso tham số truyền vào 
    public function __construct($tenSV,$maSV,$namSinh){
        $this->tenSV = $tenSV;
         $this->maSV = $maSV;
         $this->namSinh = $namSinh;
        // mình muốn khi new đối tượng nó sẽ xử lý 1 cái logic bất kỳ 
    }
    // 2 phuowngt thức khởi tạo không có tham số truyền vào

    public function setma($ma){
        $this->maSV = $ma;
    }

    public function setnamsinh($nam){
        $this->namSinh = $nam;
    }

    public function setten($ten){
        $this->tenSV = $ten;
    }
    // khai báo phương thức tức là khai báo hàm trong class
    public function tinhTuoi(){
        return date('Y') - $this->namSinh; // muốn sử dụng thuộc tính
    }
    public function hienThiThongTinSV(){
        echo $this->maSV."-".$this->tenSV."-".$this->tinhTuoi();
    }
}
 $sv1 = new SinhVien("kỳ anh","ph29121",2000);// khởi tạo đối tượng sinh viên có nghĩa là tạo ra 1 ông sinh viên mới
// $sv1 -> setten("Kyanh");
// $sv1 -> setma("ph20121");
// $sv1 -> setnamsinh("2000");
$sv1 -> hienThiThongTinSV();

// echo "<br>";
// $sv2 = new SinhVien();// khởi tạo sinh viên 2
// $sv2 -> hienThiThongTinSV();
