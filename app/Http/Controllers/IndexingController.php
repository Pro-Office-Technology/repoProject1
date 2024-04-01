<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recordtype;
use Illuminate\Support\Facades\File;

class IndexingController extends Controller
{
    public function index()
    {
        $recordtypes = recordtype::all();
        return view('indexing.index', compact('recordtypes'));
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

        return view('indexing.listpdf', [
            'folderName' => $filename,
            'pdfFiles' => $pdfFiles,
        ]);
    }

    public function openPDF($filename, $pdf)
{
    $pathToFile = storage_path('app/public/input/' . $filename . '/' . $pdf);

    if (File::exists($pathToFile)) {
        return view('filldata', [
            'pdfPath' => asset('storage/input/' . $filename . '/' . $pdf),
        ]);
    } else {
        abort(404);
    }
}

}


