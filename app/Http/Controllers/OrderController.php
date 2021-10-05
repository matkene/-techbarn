<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
use Session;

use Illuminate\Http\Request;


class OrderController extends Controller
{
    //
    /**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showPurchase()
	{
		$orders = OrderDetails::latest()
        ->where('user_id', auth()->user()->id)
        ->where('status', '=','paid')
        ->with('product')
        //->with("user")
        ->get();

        //return $orders = $orders;

        $count = $orders->count();


        return view('view-shop', compact('orders' ,'count'));
	}


	public function showLooked()
	{
		$orders = OrderDetails::latest()
        ->where('user_id', auth()->user()->id)
        ->where('status', '=','looked')
        ->with('product')
        //->with("user")
        ->get();

        $count = $orders->count();


        return view('view-looked', compact('orders' ,'count'));
	}




	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */

     public function postLooked(Request $request)
	{

       //dd($request);

		$user = auth()->user();

        $orderID = $this->generateUniqueId();

			$order = Order::create([
				'fullname' => $user->firstname . ' ' . $user->lastname,
				'user_id' => $user->id,
				'email' => $user->email,
				'shipping_fee' => $request->total_shipping_fee,
				'payment_method' => $request->payment_method,
				'total_price' => $request->total_price,
				'orderID' => $orderID,
			]);

            $product = Product::where("id", $request->id)
            ->get()->toArray();



				// add items order
				$orderdetails = OrderDetails::firstOrCreate([
					'order_id' => $order->id,
					'user_id' => $user->id,
					'orderNO' => $orderID,
					'product_id' => $product[0]['id'],
					'product_name' => $product[0]['product_name'],
					'status' => "looked",
					'color' => $product[0]['color'],
					'shipping_fee' => $product[0]['shipping_fee'],
					'quantity_ordered' => $request->quantity,
					'unit_price' => $product[0]['new_price']
				]);


           // }
           Session::flash('message', "Product Looked Successful");

            $products = Product::where("created_at", "!=", null)->orderBy('id', 'DESC')->with('category')->with('users')->paginate(10);

            $count = $products->count();
            return view('home', compact('products'));

	}



    public function purchaseProduct(Request $request)
	{

       //dd($request);

		$user = auth()->user();

        //dd($user);


		$orderID = $this->generateUniqueId();

			$order = Order::create([
				'fullname' => $user->firstname . ' ' . $user->lastname,
				'user_id' => $user->id,
				'email' => $user->email,
				'shipping_fee' => $request->total_shipping_fee,
				'payment_method' => $request->payment_method,
				'total_price' => $request->total_price,
				'orderID' => $orderID,
			]);

            $product = Product::where("id", $request->id)
            ->get()->toArray();


           //$userCarts = Cart::where("user_id", $user->id)->with("product.user")->get();

            //foreach ($userCarts as $cart) {
			//	$product = $cart->product;

				// add items order
				$orderdetails = OrderDetails::firstOrCreate([
					'order_id' => $order->id,
					'user_id' => $user->id,
					'orderNO' => $orderID,
					'product_id' => $product[0]['id'],
					'product_name' => $product[0]['product_name'],
					'status' => "paid",
					'color' => $product[0]['color'],
					'shipping_fee' => $product[0]['shipping_fee'],
					'quantity_ordered' => $request->quantity,
					'unit_price' => $product[0]['new_price']
				]);


           // }
           Session::flash('message', "Product Purchase Successful");

            $products = Product::where("created_at", "!=", null)->orderBy('id', 'DESC')->with('category')->with('users')->paginate(10);

            $count = $products->count();
            return view('home', compact('products'));

	}

    /**
	 * Generate unique order id
	 */
	protected function generateUniqueId()
	{
		// generate unique numbers for order id
		$orderID = hexdec(bin2hex(openssl_random_pseudo_bytes(5)));
		$orderIdExist = Order::find($orderID);
		// if exist append the id of d existed copy to new one to make it unique
		if ($orderIdExist) {
			$orderID = $orderID . '' . $orderIdExist->id;
		}
		return $orderID;
	}



	/**
	 * calculate cart worth
	 *
	 */
	protected function calculateCartWorth()
	{
		$userCarts = Cart::where("user_id", auth()->user()->id)->with("product")->get();
		$total_shipping_fee = 0;
		$total_price = 0;
		foreach ($userCarts as $cart) {
			$product = $cart->product;
			$total_price += floatval($product->new_price * $cart->quantity);
			$total_shipping_fee += floatval($product->shipping_fee1 * $cart->quantity);
		}

        return view('wishlist', compact('total_shipping_fee' ,'total_price'));
	}






    public function shop(Request $request){

       //dd($request);
       $products = Product::where("created_at", "!=", null)
       ->where("id", $request->id)
       ->orderBy('id', 'DESC')->with('category')
       ->with('users')->paginate(10);

      //return $products;


        return view('shop', compact('products'));

    }

    public function looked(Request $request){

        $products = Product::where("created_at", "!=", null)
       ->where("id", $request->id)
       ->orderBy('id', 'DESC')->with('category')
       ->with('users')->paginate(10);

        //return $products;


       return view('looked', compact('products'));

    }

    public function wishlist(Request $request){

        $products = Product::where("created_at", "!=", null)
       ->where("id", $request->id)
       ->orderBy('id', 'DESC')->with('category')
       ->with('users')->paginate(10);


       //return $products;

        return view('wishlist', compact('products'));

    }
}
