<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::orderBy('cat_name', 'ASC')->paginate(12);

        $count = $categories->count();

        return view('category', compact('categories' ,'count'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $category = Category::create([
                'cat_name' => $request->category_name,
                'slug' => Str::slug($request->category_name),
                'created_by' => auth()->user()->id,
            ]);

            $categories = Category::orderBy('cat_name', 'ASC')->paginate(12);
            $count = $categories->count();

            return view('category', compact('categories' ,'count'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::where('id', $id)->with('product')->first();


        return view('category', compact('categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $categories = Category::find($id);

            $currentUserInstance = auth()->user();

            $categories->update([
                'cat_name' => $request->category_name,
                "slug" => Str::slug($request->category_name)
            ]);

            $categories = Category::orderBy('cat_name', 'ASC')->paginate(12);
            $count = $categories->count();

            return view('category', compact('categories' ,'count'));


    }

}
