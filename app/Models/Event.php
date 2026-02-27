<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'occurred_at', 'eventable_type', 'eventable_id', 'category'];
    protected $casts = ['occurred_at' => 'datetime'];

    public function eventable()
    {
        return $this->morphTo();
    }
}
