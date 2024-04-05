<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recordtype;
use App\Models\indexfield;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecordTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $recordtype = recordtype::get();
        $indexfield = indexfield::pluck('name', 'id');

        return view('recordtype/index', ['data' => $recordtype], ['indexfield' => $indexfield]);

    }

    public function dd()
    {


        return view('recordtype.dd');

    }

    public function add()
    {
        $indexfield = indexfield::pluck('name', 'id');
        return view('recordtype.add',['indexfield' => $indexfield]);
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

        $path = storage_path('app/public/input/' . $filename);
        File::makeDirectory($path);

        // Create the recordtype record
        $recordtype = recordtype::create([
            'filename' => $filename,
            'description' => $description,
        ]);

        // Get the ID of the created recordtype record
        $tableId = $recordtype->id;

        // Construct the table name using the ID
        $tableName = 'record_' . $tableId;

        // Create the table
        Schema::create($tableName, function (Blueprint $table) use ($description, $validatedData) {
            $table->id('id');
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
            'id' => $tableId,
            'filename' => $filename,
            'description' => $description,
        ]);

        return redirect()->route('recordtype1.index')->with('success', 'Table created successfully!');
    }


            public function delete($id)
        {
            $recordtype = recordtype::find($id);

            // Construct the table name using the ID
            $tableName = 'record_' . $recordtype->id;

            // Drop the table if it exists
            Schema::dropIfExists($tableName);

            // Delete the folder
            $path = storage_path('app/public/input/' . $recordtype->filename);
            File::deleteDirectory($path);

            // Delete the recordtype
            $recordtype->delete();

            return redirect()->route('recordtype1.index')->with('success', 'Record and folder deleted successfully!');
        }

            public function edit($id)
            {
                $recordtype = recordtype::find($id);
                return view('recordtype.edit', compact('recordtype'));
            }

            public function update(Request $request, $id)
            {
                // Validate the request data
                $validatedData = $request->validate([
                    'filename' => 'required|string',
                    'description' => 'nullable|string',
                ]);

                // Find the recordtype by ID
                $recordtype = recordtype::findOrFail($id);

                // Delete the old folder
                $oldPath = storage_path('app/public/input/' . $recordtype->filename);
                File::deleteDirectory($oldPath);

                // Update the filename and description fields
                $recordtype->filename = $validatedData['filename'];
                $recordtype->description = $validatedData['description'];
                $recordtype->save();

                // Create new folder with the updated filename
                $newPath = storage_path('app/public/input/' . $validatedData['filename']);
                File::makeDirectory($newPath);

                // Update the corresponding record in the dynamically created table
                $tableName = 'record_' . $recordtype->id;
                if (Schema::hasTable($tableName)) {
                    DB::table($tableName)->update([
                        'filename' => $validatedData['filename'],
                        'description' => $validatedData['description'],
                    ]);
                }

                return redirect()->route('recordtype1.index')->with('success', 'Record type updated successfully!');
            }


            public function listPDF($filename)
            {
                $pathToDirectory = storage_path('app/public/input/' . $filename);

                // Check if the directory exists
                if (!File::exists($pathToDirectory)) {
                    abort(404);
                }

                // Get all PDF files in the directory
                $pdfFiles = array_filter(scandir($pathToDirectory), function ($file) {
                    return pathinfo($file, PATHINFO_EXTENSION) === 'pdf';
                });

                return view('recordtype.listpdf', [
                    'folderName' => $filename,
                    'pdfFiles' => $pdfFiles,
                ]);

            }

            public function fillDatas($filename, $pdf)
            {
                $indexfields = indexfield::all();

                $pathToFile = storage_path('app/public/input/' . $filename . '/' . $pdf);

                if (File::exists($pathToFile)) {

                return view('recordtype.filldatas', compact('filename', 'indexfields', 'pdf'));
                }
            }




            // public function fillDataStore(Request $request, $filename)
            // {
            //     // Validate the request data
            //     $validatedData = $request->validate([
            //         // Define validation rules for each index field
            //     ]);

            //     // Process the submitted data and save it to the database

            //     return redirect()->route('recordtype1.index')->with('success', 'Data filled successfully!');
            // }

}
