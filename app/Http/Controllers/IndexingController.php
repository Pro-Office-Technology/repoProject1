<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexing;
use App\Models\indexfield;

class IndexingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexing= indexing::all();
        $indexfield = indexfield::pluck('name', 'id');
        return view('indexing.index', compact('indexfield'), compact('indexing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
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
    $this->validate($request, [
        'pdf_file' => 'required|file|mimes:pdf|max:2048',
    ]);

    if ($request->hasFile('pdf_file')) {
        $originalFileName = $request->file('pdf_file')->getClientOriginalName();
        $fileName = time() . '_' . $originalFileName;
        $request->file('pdf_file')->storeAs('public/records', $fileName);

        $record = indexing::create([
            'file_path' => $fileName,
        ]);

        return redirect()->back()->with('success', 'PDF uploaded successfully!')->with('recordId', $record->id);
    } else {
        return redirect()->back()->withErrors(['error' => 'Please select a PDF file.']);
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = indexing::findOrFail($id);
        return response()->file(storage_path('app/public/records/' . $record->file_path));
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
