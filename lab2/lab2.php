<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương

class ConNguoi{
    public $HoTen;
    public $DiaChi;
    public $NamSinh;
    public $Email;
    public $Sdt;
    public function __construct($ten,$diachi,$namsinh,$email,$so,){
        
        $this->HoTen=$ten;
        $this->DiaChi=$diachi;
        $this->NamSinh=$namsinh;
        $this->Email=$email;
        $this->Sdt=$so;
    }
    public function sethoten($ten){
        $this->HoTen=$ten;
    }
    public function setdiachi($diachi){
        $this->DiaChi=$diachi;
    }
    public function setuoi($namsinh){
        $this->NamSinh=$namsinh;
    }
    public function setemail($email){
        $this->Email=$email;
    }
    public function setsdt($Sdt){
        $this->Sdt=$sdt;
    }

    public function tinhtuoi() {
        return date('Y') - $this->NamSinh;
    }
    public function hienthi(){
        echo "Ten Người:".$this->HoTen."<br>"."Đia Chỉ:".$this->DiaChi."<br>"."Tuoi:".$this->tinhtuoi()."<br>"."Email:".$this->Email."<br>"."Số Điện Thoại:".$this->Sdt."<br>";
    }
}
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
class HocSinh extends ConNguoi{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    // tạo phương thức set cho các thuộc tính trên
    public function __construct($ten,$diachi,$namsinh,$email,$so,$Toan,$ly,$hoa){
        
        parent::__construct($ten,$diachi,$namsinh,$email,$so,);
        $this->diemToan=$Toan;
        $this->diemLy=$ly;
        $this->diemHoa=$hoa;
    }
    public function setdiemtoan($toan){
        $this->diemToan=$toan;
    }
    public function setdiemly($ly){
        $this->diemLy=$ly;
    }
    public function setdiemHoa($hoa){
        $this->diemHoa=$hoa;
    }
    //tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
 
    public function gettinhdiemTB() {
        $diemtb = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $diemtb; // Trả về giá trị của điểm trung bình
    }
    
    //tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
    // hoten,diachi,tuoi,email,sdt,điểm TB
  
    public function HienThiSinhVien(){
        echo "Ten Người: " . $this->HoTen . "<br>" . "Đia Chỉ: " . $this->DiaChi . "<br>" . "Tuoi: " . $this->tinhtuoi() . "<br>" . "Email: " . $this->Email . "<br>" . "Số Điện Thoại: " . $this->Sdt . "<br>" . "Điểm Trung Bình: ".$this->gettinhdiemTB()."<br>" ;
    }
    
}
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
class GiangVien extends ConNguoi{
    public $luongCB;
    public $soGioDay;
    //// tạo phương thức set cho các thuộc tính trên
    public function __construct($ten,$diachi,$namsinh,$email,$so,$luongcb,$gioday) {
        parent::__construct($ten,$diachi,$namsinh,$email,$so,);
        $this->luongCB=$luongcb;
        $this->soGioDay=$gioday;
    }
    public function setluongCB($luong)  {
        $this->luongCB=$luong;
        
    }
    public function setsogioday($sogio)  {
        $this->soGioDay=$sogio;
        
    }
    /// tạo phương thức tính tổng lương = luongCB *soGioDay
    public function settongluong(){
        $tongluong=$this->luongCB * $this->soGioDay;
        return $tongluong;
    }
    /// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
  public function HienThigiangvien(){
    echo "Ten Người: " . $this->HoTen . "<br>" . "Đia Chỉ: " . $this->DiaChi . "<br>" . "Tuoi: " . $this->tinhtuoi() . "<br>" . "Email: " . $this->Email . "<br>" . "Số Điện Thoại: " . $this->Sdt . "<br>" . "Tổng Lương: ".$this->settongluong()."<br>" ;
  }
}

function sinhvien1(){
    $sv1= new ConNguoi("Hoàng Đào Kỳ Anh","Hòa Bình",2000,"kianh02042000@gmail.com","0332818636");
    $sv1->hienthi();
    echo "<br>";
}
function sinhvien2(){
    $sv2= new HocSinh("Nguyễn Thị A","Hòa Bình",2000,"kianh02042000@gmail.com","0332818636",7,0,6 );
    $sv2->HienThiSinhVien();
    echo "<br>";
}
function giangvien()  {
    $gv1= new GiangVien("Nguyễn Thị Bích B","Hòa Bình",2002,"kianh02042000@gmail.com","12345677",50000,30);
    $gv1->HienThigiangvien();
    echo "<br>";
}
sinhvien1();
sinhvien2();
giangvien();