<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    public function home()
    {
        return  view('face1/body/body');
    }
    public function productCategories()
    {
        return  view('face1/body/showProduct');
    }
    public function productBrands()
    {
        return  view('face1/body/detailproduct');
    }
    public function admin()
    {
        return  view('admin/body/body');
    }
}   
