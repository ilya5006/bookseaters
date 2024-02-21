<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_topic',
        'id_parent',
        'content',
    ];
    
    protected $casts = [
        'id_user' => 'integer',
        'id_parent' => 'integer',
        'id_topic' => 'integer',
        'content' => 'string',
    ];
}
