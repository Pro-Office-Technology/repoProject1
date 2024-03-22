<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('register/index');
    }


    public function add()
    {
        return view('register.add');
    }
    public function save(Request $request)
    {
        $data = [
            'filename' => $request->filename,
            'description' => $request->description,

        ];
        register::create($data);

        return redirect()->route('register.index');
    }

    public function update($id, Request $request)
    {
        $data = [

            'filename' => $request->filename,
            'description' => $request->description,

        ];

        register::find($id)->update($data);

        return redirect()->route('register.index');
    }

    public function delete($id)
    {
        register::find($id)->delete();

        return redirect()->route('register.index');
    }

}
