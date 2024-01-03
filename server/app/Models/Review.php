<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_book',
        'grade',
        'content',
    ];
    
    protected $casts = [
        'id_book' => 'integer',
        'grade' => 'decimal:<2,1>',
        'content' => 'string',
    ];
}
