<?
namespace App\Models;
class Product extends BaseModel {
public function getListProduct() {
    $sql = "select * from product";
    return loadAllRows([],$sql);
}
}

?>