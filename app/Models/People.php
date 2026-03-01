<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'birth_date',
        'death_date',
        'biography',
        'photo_path',
    ];
    protected $casts = [
        'birth_date' => 'date',
        'death_date' => 'date',
    ];

    public function affiliations(): HasMany
    {
        return $this->hasMany(Affiliation::class);
    }

    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(
            Organization::class,
            'affiliations',
            'people_id',
            'organization_id'
        )->withPivot('role', 'started_at', 'ended_at')
            ->withTimestamps();
    }

    public function events(): MorphMany
    {
        return $this->morphMany(Event::class, 'eventable');
    }

    public function getBirthDateFormattedAttribute()
    {
        return $this->birth_date?->format('d.m.Y');
    }

    public function getDeathDateFormattedAttribute()
    {
        return $this->death_date?->format('d.m.Y');
    }
}
