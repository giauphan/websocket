<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Storage\Storage
 */
class StorageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'file_name' => $this->file_name,
            'file_data' => route('getFile', ['fileId' => $this->id]),
            'file_type' => $this->file_type,
            'created_at' => $this->created_at,
        ];
    }
}
