<?php

declare(strict_types=1);

namespace App\Models\Storage;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail_name',
        'thumbnail_data',
        'type',
        'user_id'
    ];

    public function  user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
