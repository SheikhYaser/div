<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(Request $request)
    {
        $keyword = $request->keyword;
        $category_id = $request->category_id;
        $products = Product::orderBy('id', 'DESC');

        if (isset($keyword)) {
            $products = $products->where('name', 'LIKE', "%{$keyword}%");
        }

        if (isset($category_id)) {
            $products = $products->where('category_id' , $category_id);
        }
        $categories = Category::all();
        $products = $products->get();

        return view('product.index', compact('categories', 'products'));
    }


    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $category_id = $request->category_id;
        $products = Product::orderBy('id', 'DESC');

        if (isset($keyword)) {
            $products = $products->where('name', 'LIKE', "%{$keyword}%");
        }

        if (isset($category_id)) {
            $products = $products->where('category_id' , $category_id);
        }
        $categories = Category::all();
        $products = $products->get();

        return json_decode($products);
    }
}
