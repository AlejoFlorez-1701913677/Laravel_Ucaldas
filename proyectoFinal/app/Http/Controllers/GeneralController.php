<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\ProductCategory;

class GeneralController extends Controller
{
    public function welcome()
    {
        $ProductCategory = ProductCategory::all();
        return view('welcome', [
            'ProductCategory' => $ProductCategory
        ]);
    }

    public function dashboard()
    {
        $Product = Product::all();
        $ProductCategory = ProductCategory::all();
        $User = User::all();
        return view('dashboard', [
            'Product' => $Product->count(),
            'ProductCategory' => $ProductCategory->count(),
            'User' => $User->count(),
        ]);
    }

    public function productDashboard()
    {
        $Products = Product::all();

        return view('Dashboard.Product', [
            'Products' => $Products,
        ]);
    }

    public function categoryDashboard()
    {
        $ProductCategory = ProductCategory::all();

        return view('Dashboard.Category', [
            'Categories' => $ProductCategory,
        ]);
    }

    public function userDashboard()
    {
        $Users = User::all();

        return view('Dashboard.User', [
            'Users' => $Users,
        ]);
    }
}
