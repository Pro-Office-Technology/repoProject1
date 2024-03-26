<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use App\Models\indexfield;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class RecordTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $register = register::get();
        $indexfield = indexfield::pluck('name', 'id');
        return view('register/index', ['data' => $register], ['indexfield' => $indexfield]);

    }

    public function add()
    {
        $indexfield = indexfield::pluck('name', 'id');
        return view('register.add',['indexfield' => $indexfield]);
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'filename' => 'required|string',
            'description' => 'nullable|string',
            'indexfield' => 'required|array', // Ensure indexfield are submitted as an array
        ]);

        $filename = $validatedData['filename'];
        $description = $validatedData['description'];

        $path = storage_path('app/public/' . $filename);
        File::makeDirectory($path);

        // Create the Register record
        $register = register::create([
            'filename' => $filename,
            'description' => $description,
        ]);

        // Get the ID of the created Register record
        $tableId = $register->id;

        // Construct the table name using the ID
        $tableName = 'record_' . $tableId;

        // Create the table
        Schema::create($tableName, function (Blueprint $table) use ($description, $validatedData) {
            $table->id();
            $table->string('filename')->nullable();
            $table->string('description')->nullable();

            // Add columns for each selected product
            foreach ($validatedData['indexfield'] as $productId) {
                $product = indexfield::find($productId);
                if ($product) {
                    $table->{$product->type}($product->name)->nullable();
                }
            }
        });

        // Update the 'filename' and 'description' columns with the provided values
        DB::table($tableName)->insert([
            'filename' => $filename,
            'description' => $description,
        ]);

        return redirect()->route('register1.index')->with('success', 'Table created successfully!');
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
