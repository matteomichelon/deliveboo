<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        $data = [
            'products' => $products
        ];

        return view('user.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // --------------------------------------------|
        // Requesting form data in $form_data variable.|
        // Getting user_id with Auth Helper.           |
        // --------------------------------------------|
        $form_data = $request->all();
        $form_data['user_id'] = Auth::user()->id;

        // ----------------------------------------------------|
        // This will shortened the length of the img_path link.|
        // ----------------------------------------------------|
        if(isset($form_data['cover'])) {
            $img_path = Storage::put('cover', $form_data['cover']);

            if($img_path) {
                $form_data['cover'] = $img_path;
            }
        }

        // --------------------------------------------|
        // Saving $form_data in a new Product instance.|
        // --------------------------------------------|
        $new_product = new Product();
        $new_product->fill($form_data);
        $new_product->save();

        return redirect()->route('user.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $data = [
            'product' => $product
        ];
        
        return view('user.products.show', $data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
