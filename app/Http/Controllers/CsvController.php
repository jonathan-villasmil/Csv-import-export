<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Http\Requests\ImportRequest;
use App\Imports\ProductImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function import(ImportRequest $request){
        
        try{
            $file = $request->file('file');
            Excel::import(new ProductImport, $file);
            return redirect()->route('welcome'); 
        }catch(\Exception $e){
            //return view with a message error or message "all is good"
            dd("Codigo error: " . $e->getCode() . ': Descripción: ' . $e->getMessage());
        }
        
    }

    public function export(){
        return Excel::download(new ProductsExport, 'products_export.csv');
    }
}
