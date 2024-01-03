<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topic';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_book',
        'id_user',
        'title',
        'content',
    ];
    
    protected $casts = [
        'id_book' => 'integer',
        'id_user' => 'integer',
        'content' => 'string',
        'title' => 'string',
    ];
    
}
