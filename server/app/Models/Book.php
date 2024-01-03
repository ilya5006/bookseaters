<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_author',
        'title',
        'isbn',
        'cover',
        'rating',
    ];
    
    protected $casts = [
        'id_author' => 'integer',
        'title' => 'string',
        'isbn' => 'string',
        'cover' => 'string',
        'rating' => 'decimal:<2,1>',
    ];
    
}
