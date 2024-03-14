<?php
namespace App\Controllers;
use App\Models\Product;

// require_once "models/add.php";
//  function addkh(){
//    if(isset($_POST['btn_kh'])){
//       $tenkh=$_POST['ten'];
//       $tuoikh=$_POST['tuoi_kh'];
//       getadd($tenkh,$tuoikh);
//    }

//  }

//require_once "app/models/Add.php";

class AddController{
    public $product;

    public function __construct()
    {
        $this->product= new Product();
    }

    public function addkh() {
    if (isset($_POST['btn_kh'])) {
        if (isset($_POST['ten']) && isset($_POST['tuoi_kh'])) {
            $tenkh = $_POST['ten'];
            $tuoikh = $_POST['tuoi_kh'];
            $add = new Product();
            $adds = $add->getadd($tenkh, $tuoikh);
            header('location: index.php?url=/list-product');
        } else {
            // Xử lý khi 'ten' hoặc 'tuoi_kh' không tồn tại trong $_POST
            echo "Lỗi: Thiếu thông tin khách hàng.";
        }
    }
}
public function postProduct() {
    // khi nào ấn submit thì sẽ gửi dữ liệu vào trong này
    if(isset($_POST['add'])){
        // validate tạo ra 1 mảng rỗng để chứa lỗi
        $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['gia']);
    }
    }

}