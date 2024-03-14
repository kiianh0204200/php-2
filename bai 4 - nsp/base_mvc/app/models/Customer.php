<?php
namespace App\Models;

class Customer extends BaseModel{
    protected $table ="product";
    // tạo ra thuộc tính table gán ten bảnh trên csdl vào bảng
    // public function __construct(){
    //     echo "day la Product ";
    // }
    public function getCustomer(){
        $sql ="select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();// Lấy ra danh sách
    }
    // hàm truyền vào id để lấy ra chi tiết sản phẩm 
    public function getDetailCustomer($id){
        $sql="select * from $this->table where id = ?";
        $this -> setQuery($sql);
        return $this->loadRow([$id]);
    }
public function addCustomer($id,$tenSP,$gia){
    $sql="insert into $this->table values (?,?,?)";
    $this->setQuery($sql);
    return $this->execute([$id,$tenSP,$gia]);
}
public function updateCustomer($id,$tenSP,$gia) {
    $sql="update $this->table set ten_sp = ?,gia = ? where id = ?";
    $this -> setQuery($sql);
    return $this->execute([$tenSP,$gia,$id]);
    
}
//  xây dựng delete 
public function deleteCustomer($id){
    $sql ="DELETE FROM $this->table WHERE id = ?";
    $this->setQuery($sql);
    return $this->execute([$id]);
}
}
