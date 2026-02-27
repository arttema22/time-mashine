<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationFactory> */
    use HasFactory;

    protected $fillable = ['name', 'slug', 'founded_date', 'dissolved_date', 'type'];
    protected $casts = ['founded_date' => 'date', 'dissolved_date' => 'date'];

    public function affiliations()
    {
        return $this->hasMany(Affiliation::class);
    }

    public function members()
    {
        return $this->belongsToMany(Person::class, 'affiliations')
            ->withPivot('role', 'started_at', 'ended_at')
            ->withTimestamps();
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'eventable');
    }
}
