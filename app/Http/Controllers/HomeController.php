<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function product_1()
    {
        return view('home.product_1');
    }

    public function product_2()
    {
        return view('home.product_2');
    }

    public function product_3()
    {
        return view('home.product_3');
    }

    public function product_4()
    {
        return view('home.product_4');
    }

    public function product_5()
    {
        return view('home.product_5');
    }

    public function product_6()
    {
        return view('home.product_6');
    }

    public function product_7()
    {
        return view('home.product_7');
    }

    public function gallery()
    {
        return view('home.gallery');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
