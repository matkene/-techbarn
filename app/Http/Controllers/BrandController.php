<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    /**
     * List all Brand
     */
     public function index()

       {

            $brands = Brand::with('creator', 'product')->orderBy('brand_name', 'ASC')->get();

            $count = $brands->count();

            return view('brand', compact('brands' ,'count'));

       }

    /**
     * Create Brands
     */
    public function store(Request $request)
    {


            $brand = Brand::create([
                'brand_name' => $request->brand_name,
                "slug" => Str::slug($request->slug),
                'created_by' => auth()->user()->id,
            ]);

            $currentUserInstance = auth()->user();

            $brands = Brand::with('creator', 'product')->orderBy('brand_name', 'ASC')->get();

            $count = $brands->count();

            return view('brand', compact('brands' ,'count'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands = Brand::where('id', $id)->with('creator', 'product')->first();

        $count = $brands->count();

        return view('brand', compact('brands' ,'count'));
    }

    

}
