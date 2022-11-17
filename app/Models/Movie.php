<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'];

    public static function search($term)
    {
        return self::when($term, function ($query, $term) {
            $query->where('title', 'LIKE', '%' . $term . '%');
        });
    }
}
