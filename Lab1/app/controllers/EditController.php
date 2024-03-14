<?php
namespace App\ConTrollers;
use App\Models\Product;

require_once "app/models/Edit.php";
class EditController {
    public function edit() {
        if (isset($_GET['id'])) {
            $id_edit = $_GET['id'];
            $model = new Product();
            $customerData = $model->getselect($id_edit);

            if ($customerData && isset($customerData[0]['kh_id'])) {
                $customer = $customerData[0]; // Lấy dữ liệu khách hàng từ mảng con
                include "views/edit.php";
            } else {
                echo "Lỗi: Không tìm thấy thông tin khách hàng hoặc thông tin không hợp lệ.";
            }
        } else {
            echo "Lỗi: Không có thông tin khách hàng để chỉnh sửa.";
        }
    }

    public function update() {
        if (isset($_POST['btn_kh'])) {
            $id = $_POST['id_khachhang'];
            $ten = $_POST['ten'];
            $tuoi = $_POST['tuoi_kh'];
            $model = new Product();
            $model->geteditkh($id, $ten, $tuoi);
            header('location: list-product');
        } else {
            // Xử lý khi không có dữ liệu POST từ biểu mẫu
            echo "Lỗi: Thiếu thông tin khách hàng.";
        }
    }
}
?>
