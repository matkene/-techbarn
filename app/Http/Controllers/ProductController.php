<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // get all the products
    public function listAllProducts()
    {
        $products = Product::where("created_at", "!=", null)->orderBy('id', 'DESC')->with('category')->with('user')->paginate(10);

        $count = $products->count();

        return view('product', compact('products' ,'count'));
    }

    public function store(Request $request)
    {


            if (!empty($request->old_price)) {
                $oldprice = $request->old_price;
            } else {
                $oldprice = '0.00';
            }
            $images = [];
            if ($file = $request->file('product_image')) {
                $name = $file->getClientOriginalName();
                $uniqueId = rand(10, 100000);
                $imageName = config('app.url') . '/Product/' . $uniqueId . '_'. date("Y-m-d") . '_' . time() . $name;
                $file->move(('Product/'), $imageName);
            }


            $product = Product::create([
                'cat_id'  => $request->cat_id,
                'user_id' => auth()->user()->id,
                'single_package_size' => $request->single_package_size,
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'product_brand_name' => $request->brand_name,
                'processing_type' => $request->processing_type,
                'production_company' => $request->production_company,
                'product_material' => $request->product_material,
                'product_weight' => $request->product_weight,
                'tags' => $request->tags,
                'size' => $request->size,
                'estimated_time' => $request->estimated_time,
                'available_quantity' => $request->available_quantity,
                'old_price' => $oldprice,
                'new_price' => $request->new_price,
                "shipping_fee" => $request->shipping_fee,
                'product_image' =>  implode("|", $imageName),
            ]);

            $currentUserInstance = auth()->user();

            $products = Product::where("created_at", "!=", null)->orderBy('id', 'DESC')->with('category')->with('user')->paginate(10);
            $count = $products->count();


            return view('product', compact('products' ,'count'));
        }
    }

    public function show($id)
    {
        $products = Product::where('id', $id)->with('category')->with('user')->first();

        return view('product', compact('products' ,'count'));
    }

}
