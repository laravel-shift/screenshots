<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'type',
        'published_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'published_at' => 'datetime',
    ];

    public function commits(): HasMany
    {
        return $this->hasMany(Commit::class);
    }

    public function isTailwind(): bool
    {
        return $this->type === 'Tailwind';
    }
}
