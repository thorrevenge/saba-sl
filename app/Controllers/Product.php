<?php
 
namespace App\Controllers;
 
use App\Models\ProductModel;
 
class Product extends BaseController
{
    public function index()
    {
        $product = new ProductModel();
        echo $product->getData();
    }

    public function insertdata()
    {
        $product = new ProductModel();
        $insert = $product->insert([
            'Nama_Produk' => 'Redmi Note 9 Pro',
            'Harga' => '3499000'
        ]);
        if ($insert) {
            echo "Data Berhasil diinsert";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }
    }
}