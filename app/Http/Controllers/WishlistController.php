<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;

use Session;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function showWishlist()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)
        ->where('status', 1)
        ->with('product')
        ->get();

        $count = $wishlists->count();

        return view('view-wishlist', compact('wishlists' ,'count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postWishlist(Request $request)
    {

        //dd($request);
//
        //$checkwishlists = Wishlist::where('product_id', $request->product_id)->first();


        $totalprice = $request->quantity * $request->price;

        $wishlist = Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'price' => $request->price,
            'status' => 1,
            'quantity' => $request->quantity,
            'total_price' => $totalprice,
        ]);

        //$addedWishlist = Wishlist::with('product')->where('product_id', $request->product_id)->first();

        Session::flash('message', "Product Wishlist Successful");

        $products = Product::where("created_at", "!=", null)->orderBy('id', 'DESC')->with('category')->with('users')->paginate(10);

        $count = $products->count();

        return view('home', compact('products' ,'wishlist'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::where('product_id', $id)->where('user_id', auth()->user()->id)->first();

        $wishlist->delete();

        return view('wishlist');
    }


}
