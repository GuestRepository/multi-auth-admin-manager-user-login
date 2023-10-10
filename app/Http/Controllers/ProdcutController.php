<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProdcutController extends Controller
{
    public function index(){
        return view('admin.products.index');
    }
}
