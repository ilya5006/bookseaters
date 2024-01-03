<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'author';
    
    protected $primaryKey = 'id';

    protected $attributes = [
        'middlename' => null,
    ];

    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'avatar',
        'biography',
    ];
    
    protected $casts = [
        'firstname' => 'string',
        'middlename' => 'string',
        'lastname' => 'string',
        'avatar' => 'string',
        'biography' => 'string',
    ];
    
}
