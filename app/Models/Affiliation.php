<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    /** @use HasFactory<\Database\Factories\AffiliationFactory> */
    use HasFactory;

    protected $fillable = ['person_id', 'organization_id', 'role', 'started_at', 'ended_at'];
    protected $casts = ['started_at' => 'date', 'ended_at' => 'date'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    // Хелпер для отображения "По настоящее время"
    public function getEndDateAttribute()
    {
        return $this->attributes['ended_at'] ?? 'по н.в.';
    }
}
