<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quote';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_book',
        'id_user',
        'content',
    ];
    
    protected $casts = [
        'id_book' => 'integer',
        'id_user' => 'integer',
        'content' => 'string',
    ];
}
