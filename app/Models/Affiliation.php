<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Affiliation extends Model
{
    use HasFactory;

    protected $fillable = [
        'people_id',
        'organization_id',
        'role',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'started_at' => 'date',
        'ended_at' => 'date',
    ];

    protected $appends = ['is_current'];

    public function getIsCurrentAttribute(): bool
    {
        return is_null($this->ended_at);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class, 'people_id');
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
