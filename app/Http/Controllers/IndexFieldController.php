<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexfield;


class IndexFieldController extends Controller
{
    public function index()
    {
        $product = indexfield::get();

        return view('indexfield.index', ['data' => $product]);
    }

    public function add()
    {
        return view('indexfield.form');
    }

    public function save(Request $request)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'length' => $request->length,

        ];
        indexfield::create($data);

        return redirect()->route('indexfield.index');
    }

    public function edit($id)
    {
        $product = indexfield::find($id);

        return view('indexfield.form', ['product' => $product]);
    }

    public function update($id, Request $request)
    {
        $data = [

            'name' => $request->name,
            'type' => $request->type,
            'length' => $request->length,

        ];

        indexfield::find($id)->update($data);

        return redirect()->route('indexfield.index');
    }

    public function delete($id)
    {
        indexfield::find($id)->delete();

        return redirect()->route('indexfield.index');
    }

}
