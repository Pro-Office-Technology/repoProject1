<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;


class ProductController extends Controller
{
    public function index()
    {
        $product = products::get();

        return view('products.index', ['data' => $product]);
    }

    public function add()
    {
        return view('products.form');
    }

    public function save(Request $request)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'length' => $request->length,

        ];
        products::create($data);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = products::find($id);

        return view('products.form', ['product' => $product]);
    }

    public function update($id, Request $request)
    {
        $data = [

            'name' => $request->name,
            'type' => $request->type,
            'length' => $request->length,

        ];

        products::find($id)->update($data);

        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        products::find($id)->delete();

        return redirect()->route('products.index');
    }

}
