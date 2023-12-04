<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $products;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->products = new ProductModel();
    }

    // data show
    public function index()
    {
        $data['products'] =  $this->products->findAll();
        $data['title'] = "All Products";
        // print_r($data);
        return view('products/allProducts', $data);
    }

// data insert
    public function create()
    {
        return view('products/create');
    }
    public function store()
    {
        //return $this->request->getVar('name');   // get data from the form
        $data = [
            'product' => $this->request->getVar('name'),
            'category' => $this->request->getVar('cat'),
            'price' => $this->request->getVar('price'),
            'sku' => $this->request->getVar('sku'),
            'model' => $this->request->getVar('model'),
        ];

        // print_r($data);

   

        $rules = [
            'name' => 'required|max_length[30]',
            // 'password' => 'required|max_length[255]|min_length[10]',
            // 'passconf' => 'required|max_length[255]|matches[password]',
            // 'email'    => 'required|max_length[254]|valid_email',
        ];

        if (! $this->validate($rules)) {
            return view('/products/create');
        } else {
            $this->products->insert($data);
            $session = session();
            $session->setFlashdata('msg', 'Inserted Successfully');
            $this->response->redirect('/products');
        }
    }


    // edit data 

    public function edit($id){
        // echo $id;
        $data = $this->products->find($id);
        // print_r($data);
        return view("products/edit", $data);
    }


    // data delete
    public function delete($id){
        $this->products->where('product_id', $id); 
        $this->products->delete();
        $this->response->redirect('/products');
    }
}
