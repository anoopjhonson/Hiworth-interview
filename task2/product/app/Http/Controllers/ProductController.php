<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;
class ProductController extends Controller
{
    public function createForm()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validator =$request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'variants' => 'required|array',
            'variants.*.size' => 'required|string|max:50',
            'variants.*.color' => 'required|string|max:50',
            'variants.*.price' => 'required|numeric|min:0',
            'variants.*.quantity' => 'required|integer|min:1',
        ]);
   
       
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        foreach ($request->input('variants') as $variantData) {
            $variant = new Variant($variantData);
            $product->variants()->save($variant);
        }

        return redirect()->route('products.index');
    }

    public function index()
    {
        $products = Product::with('variants')->get();
        return view('products.index', compact('products'));
    }
}