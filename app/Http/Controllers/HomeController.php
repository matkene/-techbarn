<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
          $products = Product::where("created_at", "!=", null)->orderBy('id', 'DESC')->with('category')->with('users')->paginate(10);

          $count = $products->count();
          return view('home', compact('products'));
    }
}
