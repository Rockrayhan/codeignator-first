<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;




class CategoryController extends BaseController
{
    private $category ;
    public function __construct()
    {
        $this->category = new CategoryModel();
    }

    public function index()
    {
        $data['category'] =  $this->category->findAll();
        // print_r($data);
        return view('category/index', $data);
    }
}
