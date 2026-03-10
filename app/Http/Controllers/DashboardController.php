<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $productCount = Product::count();
        return view('dashboard', compact('categoryCount', 'productCount'));
    }
}
