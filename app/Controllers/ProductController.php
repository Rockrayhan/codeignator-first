<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel ;

class ProductController extends BaseController
{
    private $products ;

    public function __construct()
    {
        $this-> products = new ProductModel();
    }

    public function index()
    {
        $data['products'] =  $this->products->findAll();
        $data['title'] = "All Products";
        // print_r($data);
        return view('products/allProducts', $data );
    }
}
