<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $products = Product::all();

        $data = [
            'products' => $products
        ];

        return view('home', $data);
    }
}
