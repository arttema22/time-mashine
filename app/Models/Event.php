<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'occurred_at',
        'eventable_id',
        'eventable_type',
        'category',
        'cover_image',
    ];

    protected $casts = [
        'occurred_at' => 'datetime',
    ];

    public function eventable(): MorphTo
    {
        return $this->morphTo();
    }
}
