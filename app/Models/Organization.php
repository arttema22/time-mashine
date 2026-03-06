<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'started_at',
        'ended_at',
        'type',
        'description',
        'logo_path',
    ];

    protected $casts = [
        'started_at' => 'date',
        'ended_at' => 'date',
    ];

    public function affiliations(): HasMany
    {
        return $this->hasMany(Affiliation::class);
    }

    public function people(): BelongsToMany
    {
        return $this->belongsToMany(
            People::class,
            'affiliations',
            'organization_id',
            'people_id'
        )->withPivot('role', 'started_at', 'ended_at')
            ->withTimestamps();
    }

    public function events(): MorphMany
    {
        return $this->morphMany(Event::class, 'eventable');
    }

    public function getFoundedDateFormattedAttribute()
    {
        return $this->started_at?->format('d.m.Y');
    }

    public function getDissolvedDateFormattedAttribute()
    {
        return $this->ended_at?->format('d.m.Y');
    }
}
