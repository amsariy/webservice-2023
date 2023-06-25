<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $fillable = [
        'posting',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
