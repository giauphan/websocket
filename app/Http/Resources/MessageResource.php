<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Message
 */
class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'message'=>$this->message,
            'file_data'=>$this->file_data,
            'room_id'=>$this->room_id,
            'user_id'=>$this->user_id,
            'created_at'=>$this->created_at
        ];
    }
}
