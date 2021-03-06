<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewOrderAdminNotification;


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

        $user = Auth::user();
        
        $products = $user->products;

        $data = [
            'products' => $products
        ];

        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_product = new Product();
        // ------------------------------------------------------|
        // Validating form data with private validation function.|
        // ------------------------------------------------------|
        $request->validate($this->getValidatorRules());

        // --------------------------------------------|
        // Requesting form data in $form_data variable.|
        // Getting user_id with Auth Helper.           |
        // --------------------------------------------|
        $form_data = $request->all();
        $form_data['user_id'] = Auth::user()->id;

        // --------------------|
        // Checking visibility.|
        // --------------------|
        if (isset($form_data['visibility'])) {
            $form_data['visibility'] = 1;
        } else {
            $form_data['visibility'] = 0;
        }

        // ----------------------------------------------------|
        // This will shortened the length of the img_path link.|
        // ----------------------------------------------------|
        if (isset($form_data['cover'])) {
            $img_path = Storage::put('cover', $form_data['cover']);

            if ($img_path) {
                $form_data['cover'] = $img_path;
                $new_product->path_load_image = 1;
            }
        } else {
            $form_data['cover'] = asset('img/defaultproduct.jpg');
            $new_product->path_load_image = 0;
        }

        // --------------------------------------------|
        // Saving $form_data in a new Product instance.|
        // --------------------------------------------|
        $new_product->fill($form_data);
        $new_product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Auth::user()->products->firstWhere('id', $id);

        if(!$product) {
            abort('404');
        }

        $data = [
            'product' => $product
        ];
        
        return view('admin.products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Auth::user()->products->firstWhere('id', $id);

        if(!$product) {
            abort('404');
        }

        $data = [
            'product' => $product
        ];

        return view('admin.products.edit', $data);
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
        // ----------------------------------|
        // Getting desired product to update.|
        // ----------------------------------|

        $updated_product = Auth::user()->products->firstWhere('id', $id);

        if(!$updated_product) {
            abort('404');
        }

        // ------------------------------------------------------|
        // Validating form data with private validation function.|
        // ------------------------------------------------------|
        $request->validate($this->getValidatorRules());


        // --------------------------------------------|
        // Requesting form data in $form_data variable.|
        // --------------------------------------------|
        $form_data = $request->all();

        // --------------------|
        // Checking visibility.|
        // --------------------|
        if (isset($form_data['visibility'])) {
            $form_data['visibility'] = 1;
        } else {
            $form_data['visibility'] = 0;
        }

        // ----------------------------------------------------|
        // This will shortened the length of the img_path link.|
        // ----------------------------------------------------|
        if (isset($form_data['cover'])) {
            $img_path = Storage::put('cover', $form_data['cover']);

            if ($img_path) {
                $form_data['cover'] = $img_path;
                $updated_product->path_load_image = 1;
            } else {
                $form_data['cover'] = asset('img/defaultproduct.jpg');
                $updated_product->path_load_image = 0;
            }
        }

        // ----------------------------------------------|
        // Updating Product instance with new $form_data.|
        // ----------------------------------------------|
        $updated_product->update($form_data);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {      
        
        $product = Auth::user()->products->firstWhere('id', $id);

        if(!$product) {
            abort('404');
        }

        $product->delete();

        return redirect()->route('admin.products.index');
    }

    // ----------------------------------------------------------------------|
    // Saving $validation_rules as a private function to be used when called.|
    // ----------------------------------------------------------------------|
    private function getValidatorRules()
    {
        $validation_rules = [
            'name' => ['required', 'min:1', 'max:100', 'string'],
            'description' => ['nullable', 'min:10', 'max:500'],
            'price' => ['required', 'between:0,99999.99', 'numeric'],
            'cover' => ['nullable', 'max:2000']
        ];

        return $validation_rules;
    }
}
