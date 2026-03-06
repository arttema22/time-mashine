<?php

namespace App\Models;

use App\EventCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'started_at',
        'ended_at',
        'eventable_id',
        'eventable_type',
        'category',
        'cover_image',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
        'category' => EventCategory::class,
    ];

    public function eventable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Аксессор для отображения категории
     */
    public function getCategoryLabelAttribute(): string
    {
        return $this->category?->toString() ?? 'Без категории';
    }

    public function getCategoryIconAttribute(): string
    {
        return $this->category?->icon() ?? '📌';
    }

    public function getOccurredAtFormattedAttribute()
    {
        return $this->started_at?->format('d.m.Y');
    }

    public function getEndedAtFormattedAttribute()
    {
        return $this->ended_at->format('d.m.Y');
    }
}
