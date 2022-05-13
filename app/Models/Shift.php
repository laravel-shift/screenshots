<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function commits()
    {
        return $this->hasMany(Commit::class);
    }

    public function getPublisedAtAttribute($value)
    {
        var_dump($value);
        return $value ?? now();
    }

    public function isTailwind(): bool
    {
        return $this->type === 'Tailwind';
    }
}
