<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.index');
    }

    public function showCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::latest()->published()->where('category_id', $category->id)->paginate(9);
        return view('front.category.show-category', compact('products', 'category'));
    }

    public function productSingle($id)
    {
        $product = Product::findOrFail($id);
        return view('front.product.product-single', compact('product'));
    }
}
