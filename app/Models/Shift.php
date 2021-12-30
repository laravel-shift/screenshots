<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
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
}