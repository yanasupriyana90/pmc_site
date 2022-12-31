<?php

namespace App\Http\Controllers;

use App\Models\Product_1;
use Illuminate\Http\Request;

class Product_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Product_1::first();

        return view('product_1', compact('product_1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_1  $product_1
     * @return \Illuminate\Http\Response
     */
    public function show(Product_1 $product_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_1  $product_1
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_1 $product_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_1  $product_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_1 = Product_1::find($id);

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
            'primacy_1' => 'required',
            'primacy_2' => 'required',
            'primacy_3' => 'required',
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/materials';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        $product_1->update($input);

        return redirect('/admin/product_1')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_1  $product_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_1 $product_1)
    {
        //
    }
}
