<?php
namespace App\Models;

class Product extends BaseModel{
    protected $table ="product";
    // tạo ra thuộc tính table gán ten bảnh trên csdl vào bảng
    // public function __construct(){
    //     echo "day la Product ";
    // }
    public function getProduct(){
        $sql ="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();// Lấy ra danh sách
    }
    // hàm truyền vào id để lấy ra chi tiết sản phẩm 
    public function getDetailProduct($id){
        $sql="select * from $this->table where id = ?";
        $this -> setQuery($sql);
        return $this->loadRow([$id]);
    }
public function addProduct($id,$tenSP,$gia){
    $sql="insert into $this->table values (?,?,?)";
    $this->setQuery($sql);
    return $this->execute([$id,$tenSP,$gia]);
}
public function updateProduct($id,$tenSP,$gia) {
    $sql="update $this->table set ten_sp = ?,gia = ? where id = ?";
    $this -> setQuery($sql);
    return $this->execute([$tenSP,$gia,$id]);
    
}
//  xây dựng delete 
public function deleteProduct($id){
    $sql ="DELETE FROM $this->table WHERE id = ?";
    $this->setQuery($sql);
    return $this->execute([$id]);
}

}
