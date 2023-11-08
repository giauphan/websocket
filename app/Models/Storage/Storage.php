<?php

declare(strict_types=1);

namespace App\Models\Storage;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Storage extends Model
{

    protected $guarded = [];

    protected $casts = [
        'file_data' => 'string', 
        'file_name' => 'string', 
        'file_type' => 'string', 
    ];
    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function  message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
