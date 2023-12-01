<?php

declare(strict_types=1);

namespace App\Http\Controllers\Storage;

use App\Http\Controllers\Controller;
use App\Http\Resources\StorageResource;
use App\Models\Storage\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $base64 = base64_encode(file_get_contents(public_path('/icon/FilePng.svg')));
        // // Store the file in the storage
        // $storage = Storage::query()->create([
        //     'file_data' => $base64,
        //     'file_name' => 'abc',
        //     'file_type' => 'svg',
        //     'user_id' => $request->user()->id,
        // ]);

        // // Create a new message
        // $message = Message::query()->create([
        //     'message' => 'asdasd',
        //     'room_id' => 1,
        //     'file_data' => route('getFile', [
        //         'fileId' => $storage->id,
        //     ]),
        //     'user_id' => $request->user()->id,
        // ]);

        $storageList = Storage::query()
            ->with(['message', 'user'])
            ->where('user_id', $request->user()->id)
            ->get();

        return view('Storage.storage', [
            'storage' => StorageResource::collection($storageList),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
