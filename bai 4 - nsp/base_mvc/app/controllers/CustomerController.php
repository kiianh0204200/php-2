<?php
// ten file như nào thì đặt tên class như thế
namespace App\Controllers;
use App\Models\Customer;

class CustomerController extends BaseController {
    public $customer;
    public function __construct(){
         echo "   CustomerController ";
        $this->customer = new Customer();
    }
  
    public function index(){
        $customers = $this->customer->getCustomer();
        $title = "abc";
        $hearder = "bca";
        return $this->render('customer.index',compact('title','hearder','customers')); 
        var_dump( $customers);

    }

    public function addCustomer(){

        return $this->render('customer.add');
    }
    public function postCustomer() {
        // khi nào ấn submit thì sẽ gửi dữ liệu vào trong này
        if(isset($_POST['add'])){
            // validate tạo ra 1 mảng rỗng để chứa lỗi
            $errors = [];
            // nuế như bỏ trống tên sảm phẩm
            if(empty($_POST['ten_sp'])){
                // pust lỗi vào mảng err
                $errors[] = "bạn không được để trống tên sản phẩm";
            }
            // nếu như bỏ trống đơn giá
            if(empty($_POST['gia'])){
                $errors[] = "ban k được để trống giá";
            }
        }
        if(count($errors) > 0 ){ // có Lỗi
            flash('errors',$errors,'add-customer');
        } else{
            $result = $this->customer->addCustomer(NULL,$_POST['ten_sp'],$_POST['gia']);
            if($result){
                flash('success',"thêm thành công sp ",'add-customer');
            }
        }
    }
    public function detailCustomer($id) {
        $customers = $this->customer->getDetailCustomer($id);
        return $this->render('customer.edit',compact('customers'));
    }
    public function updateCustomer($id) {
        if (isset($_POST['edit'])) {
            // validate tạo ra 1 mảng rỗng để chứa lỗi
            $errors = [];
            // nuế như bỏ trống tên sảm phẩm
            if(empty($_POST['ten_sp'])){
                // pust lỗi vào mảng err
                $errors[] = "bạn không được để trống tên sản phẩm";
            }
            // nếu như bỏ trống đơn giá
            if(empty($_POST['gia'])){
                $errors[] = "ban k được để trống giá";
            }
            if(count($errors) > 0 ){ // có Lỗi
                flash('errors',$errors,'add-customer');
            } else{
                $result = $this->customer->updateCustomer($id,$_POST['ten_sp'],$_POST['gia']);
                if($result){
                    flash('success',"thêm thành công sp ",'list-customer');
                }
            }


        }
    }

    public function deleteCustomer($id) {
        $result = $this->customer->deleteCustomer($id);
    
        if ($result) {
            // Chuyển hướng về trang danh sách sản phẩm sau khi xóa thành công
             header("Location: http://localhost/php-2/bai%204%20-%20nsp/base_mvc/list-customer");
        } else {
            // Xóa không thành công, có thể hiển thị thông báo lỗi
            echo 'Xóa sản phẩm không thành công.';
        }
    }
}

