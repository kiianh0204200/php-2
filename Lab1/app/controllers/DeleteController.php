<?php
namespace App\ConTrollers;
use App\Models\Product;
//require_once "app/models/Delete.php";
class DeleteController{
public function deletekh(){
    $id=$_GET['id'];
    $del= new Product();
     $dels= $del->getdeletekh($id);
    header('location: index.php?url=/list-product');
}}