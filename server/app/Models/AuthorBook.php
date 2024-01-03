<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    use HasFactory;
    
    protected $table = 'author_book';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_author',
        'id_book',
    ];
    
    protected $casts = [
        'id_author' => 'integer',
        'id_book' => 'integer',
    ];
}
