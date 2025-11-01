<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\View\ViewModels\ProductViewModel;
use App\ViewModels\ProductViewModel as ViewModelsProductViewModel;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function result(Request $request)
    {
        $product = ViewModelsProductViewModel::fromRequest($request->all());
        return view('product.result', compact('product'));
    }
}
