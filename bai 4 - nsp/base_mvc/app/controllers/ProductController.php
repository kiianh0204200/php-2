<?php
// ten file như nào thì đặt tên class như thế
namespace App\Controllers;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
class ProductController extends BaseController {
    public $product;
    public function __construct(){
//        echo "day là ProductController ";
        $this->product = new Product();
       
    }
    public function index(){
        $products = $this->product->getProduct();
        $title = "abc";
        $hearder = "bca";
        return $this->render('product.index',compact('title','hearder','products')); 
        var_dump( $products);

    }
    public function addProduct(){

        return $this->render('product.add');
    }
    public function postProduct() {
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
            flash('errors',$errors,'add-product');
        } else{
            $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['gia']);
            if($result){
                flash('success',"thêm thành công sp ",'list-product');
            }
        }
    }
    public function detailProduct($id) {
        $product = $this->product->getDetailProduct($id);
        return $this->render('product.edit',compact('product'));
    }
    public function updateProduct($id) {
        if (isset($_POST['edit'])) {
            $result = $this->product->updateProduct($id,$_POST['ten_sp'],$_POST['gia']);
            if ($result) {
                flash('success', 'Sửa thanh cong', 'list-product');
            }
        }
    }
    public function deleteProduct($id) {
        $result = $this->product->deleteProduct($id);
    
        if ($result) {
            // Chuyển hướng về trang danh sách sản phẩm sau khi xóa thành công
            header("Location: http://localhost/php-2/bai%204%20-%20nsp/base_mvc/list-product");
        } else {
            // Xóa không thành công, có thể hiển thị thông báo lỗi
            echo 'Xóa sản phẩm không thành công.';
        }
    }
}