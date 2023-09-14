<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function import(Request $request){
        dd("TODO");
    }

    public function export(){
        dd("TODO");
    }
}
