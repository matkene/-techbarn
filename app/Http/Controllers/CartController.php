<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->where('status', 1)->with('product')->get();

        $count = $carts->count();


        return view('cart', compact('carts' ,'count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = auth()->user()->id;
        $product = Product::find($request->product_id);

        $cartexist = Cart::where('product_id', $request->product_id)->where('user_id', $userId)->first();
        if ($cartexist) {
            $totalquantity = $cartexist->quantity + $request->quantity;
            $totalprice = $totalquantity * $request->price;

            $cart = $cartexist->update([
                'quantity' => $totalquantity,
                'price' => $request->price,
                'total_price' => $totalprice,
            ]);
        } else {
            $totalprice = $request->quantity * $request->price;
            $cart = Cart::create([
                'user_id' => $userId,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'total_price' => $totalprice,
            ]);
        }


        return view('cart', compact('cart'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cart = Cart::where('id', $request->id)->where('user_id', auth()->user()->id)->with("product")->first();

        if ($cart->product->available_quantity < $request->quantity) {
            $cart->update([
                'quantity' => $cart->product->available_quantity,
                'total_price' => $cart->product->available_quantity * $cart->price,
            ]);

        }

        $totalprice = $request->quantity * $cart->price;

        $cart->update([
            'quantity' => $request->quantity,
            'total_price' => $totalprice,
        ]);



        return view('cart', compact('cart' ,'count'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Login and transfer item to cart
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transferCart(Request $request)
    {
        $userId = auth()->user()->id;

        if (is_array($request->carts))
        {
            foreach ($request->carts as $key => $values)
             {
                $cartexist = Cart::where('product_id', $values["product_id"])->where('user_id', $userId)->where('status', 1)->first();
                if ($cartexist)
                {
                    $totalquantity = $cartexist->quantity + $values["quantity"];
                    $totalprice = $totalquantity * $values["price"];
                    $cart = $cartexist->update([
                        'quantity' => $totalquantity,
                        'price' => $values["price"],
                        'total_price' => $totalprice,
                    ]);
                } else {
                    $totalprice = $values["quantity"] * $values["price"];
                    $carts[] = Cart::firstOrCreate([
                        'user_id' => $userId,
                        'product_id' => $values["product_id"],
                        'quantity' => $values["quantity"],
                        'price' => $values["price"],
                        'total_price' => $totalprice,
                    ]);
                }
        }   }
        return view('cart', compact('carts'));
    }


}
