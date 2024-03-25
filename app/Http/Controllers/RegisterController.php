<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\products;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $register = register::get();
        $products = products::pluck('name', 'id');
        return view('register/index', ['data' => $register], ['products' => $products]);

    }

    public function add()
    {
        return view('register.add');
    }


    public function store(Request $request){

    $data = [
        'filename' => $request->filename,
        'description' => $request->description,
    ];

    $filename = $request->filename;
    $path = storage_path('app/public/' . $filename);
    File::makeDirectory($path);

    register::create($data);
    return redirect()->route('register1.index')->with('success', 'Folder and Record created successfully!');
}

    public function delete($id)
    {
        $record = register::find($id);


        $path = storage_path('app/public/' . $record->filename);
        File::deleteDirectory($path);

        $record->delete();

        return redirect()->route('register1.index')->with('success', 'Record and folder deleted successfully!');
    }


}
