<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'info',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'shift_id' => 'integer',
            'info' => 'boolean',
        ];
    }
}
