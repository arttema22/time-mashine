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
        'founded_date',
        'dissolved_date',
        'type',
        'description',
        'logo_path',
    ];

    protected $casts = ['founded_date', 'dissolved_date'];

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
}
