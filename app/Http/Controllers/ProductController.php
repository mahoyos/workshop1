<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ProductController extends Controller
{


    public static function parseStrToJson(string $str)
    {
        $array = explode(",", $str);
        $json = json_encode($array);
        return $json;
    }

    public function createProduct(): View
    {
        return view('product.createProduct');
    }

    public function saveProduct(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'brand' => 'required',
            'keywords' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',

        ]);
        $keys = ProductController::parseStrToJson($request->input('keywords'));
        $request->merge(['keywords' => $keys]);
        Product::create($request->only(['name', 'image', 'brand', 'keywords', 'price', 'stock', 'description']));
        Session::flash('success', 'Elemento creado satisfactoriamente');

        return redirect()->route('product.showProducts');
    }

    public function showProducts(): view
    {
        $viewData = [];
        $viewData['products'] = Product::all();

        return view('product.showProducts')->with('viewData', $viewData);
    }

    public function showSpecificProduct(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['product'] = $product;

        return view('product.specificProduct')->with('viewData', $viewData);
    }

    public function deleteProduct(string $id): \Illuminate\Http\RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.showProducts');
    }

    
}


