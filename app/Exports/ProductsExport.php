<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //If you want to select certain fields
        return Product::select('name', 'description', 'price')->get();

        //If you want all
        //return Product::all();
    }
}
