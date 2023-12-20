<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;      // sent cat data
use App\Models\ProductModel;



class ProductController extends BaseController
{
    private $products;
    private $category;              // get cat data
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->products = new ProductModel();
        $this->category = new CategoryModel();      // get cat data
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
        $this->products->join('category', 'category.id = products.category_id'); 
        $data['cats'] =  $this->category->findAll();     // get cat data
        return view('products/create', $data);
    }
    public function store()
    {
        //return $this->request->getVar('name');   // get data from the form
        $data = [
            'product' => $this->request->getVar('name'),
            'category_id' => $this->request->getVar('cat'),
            'price' => $this->request->getVar('price'),
            'sku' => $this->request->getVar('sku'),
            'model' => $this->request->getVar('model'),
            // 'photo' => $this->request->getFile('photo')->getName('photo'),
        ];

        // print_r($data);

   

        $rules = [
            'name' => 'required|max_length[30]',
            'photo' => 'uploaded[photo]|max_size[photo,1024]|ext_in[photo,jpg,jpeg]',
            // 'password' => 'required|max_length[255]|min_length[10]',
            // 'passconf' => 'required|max_length[255]|matches[password]',
            // 'email'    => 'required|max_length[254]|valid_email',
        ];

        if (! $this->validate($rules)) {
            return view('/products/create');
        } else {
            // echo WRITEPATH;      // (check path to upload folder)
            // $img = $this->request->getFile('photo');
            // $img->move( WRITEPATH.'uploads' );
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


    // update
public function update($id){
    $data = [
        'product' => $this->request->getVar('name'),
        'category' => $this->request->getVar('cat'),
        'price' => $this->request->getVar('price'),
        'sku' => $this->request->getVar('sku'),
        'model' => $this->request->getVar('model'),
    ];

    $this->products->update($id, $data);
    $session = session();
    $session->setFlashdata('msg', 'updated Successfully');
    $this->response->redirect('/products');

} 


    // data delete
    public function delete($id){
        $this->products->where('id', $id); 
        $this->products->delete();
        $this->response->redirect('/products');
    }
}
