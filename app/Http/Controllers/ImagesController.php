<?php

namespace App\Http\Controllers;

use App\Models\Storage\Storage;
use Illuminate\Support\Facades\Response;

class ImagesController extends Controller
{
    public function getFile($fileId)
    {
        $storagePath = Storage::query()
            ->findOrFail($fileId);
        $fileData = base64_decode($storagePath->thumbnail_data);

        if (! $storagePath) {
            abort(404);
        }

        $headers = [
            'Content-Type' => 'images',
            'Content-Disposition' => 'inline; filename="'.$storagePath->thumbnail_name.'"',
        ];

        return Response::make($fileData, 200, $headers);
    }
}
