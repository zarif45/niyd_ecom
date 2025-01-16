<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function category()
    {
        return view('website.category.index');
    }

    public function product()
    {
        return view('website.product.index');
    }
}
