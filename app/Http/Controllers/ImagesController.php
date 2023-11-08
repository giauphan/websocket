<?php

namespace App\Http\Controllers;

use App\Models\Storage\Storage;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class ImagesController extends Controller
{
    public function getFile(Request $request, $fileId)
    {
        $storagePath = Storage::query()->findOrFail($fileId);

        if (! $storagePath) {
            abort(404);
        }
        if ($storagePath->user_id !== $request->user()->id) {
            abort(403);
        }

        $fileData = base64_decode($storagePath->file_data);

        $contentType = $storagePath->file_type;
        $filename = $storagePath->file_name;

        $headers = [
            'Content-Disposition' => 'inline; filename="'.$filename.'"',
        ];

        if ($contentType === 'pdf') {
            $headers['Content-Type'] = 'application/pdf';
        } elseif ($contentType === 'svg') {
            $headers['Content-Type'] = 'image/svg+xml';
        } else {
            $headers['Content-Type'] = 'image/*';
        }

        return Response::make($fileData, 200, $headers);
    }
}
