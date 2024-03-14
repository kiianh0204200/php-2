<?php
namespace APP\Controller;
use App\Products\Product;
class ProductController extends BaseController {
public function getProduct() {
    $products = getListProduct();
    return render('product.index',compact('products'));
}
}