<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    public function index(): View
    {
        return view('te');
    }
    public function store(Request $request)
    {

        if ($request->hasFile('file')) {
            $file = $request->file('file');
    
            // Check if the file is not null
            if ($file === null) {
                return response()->json(['error' => 'Invalid file.'], 400);
            }
    
            // Validate the uploaded file
            if (!$file->isValid()) {
                return response()->json(['error' => $file->getError()], 400);
            }
    
            // Save the file to the desired location
            $file->store('uploads', 'public');
    
            // Return a success response
            return Redirect::route('upload.show');
        }
    
        // Return an error response if no file is uploaded
        return response()->json(['error' => 'No file uploaded.'], 400);
    }
}
