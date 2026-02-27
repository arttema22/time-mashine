<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    protected $fillable = ['name', 'slug', 'birth_date', 'death_date', 'biography'];
    protected $casts = ['birth_date' => 'date', 'death_date' => 'date'];

    // Связи с организациями (где работал/участвовал)
    public function affiliations()
    {
        return $this->hasMany(Affiliation::class);
    }

    public function organizations()
    {
        return $this->belongsToMany(Organization::class, 'affiliations')
            ->withPivot('role', 'started_at', 'ended_at')
            ->withTimestamps();
    }

    // События (рождение, сольные альбомы и т.д.)
    public function events()
    {
        return $this->morphMany(Event::class, 'eventable');
    }
}
