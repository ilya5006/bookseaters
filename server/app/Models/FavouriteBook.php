<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteBook extends Model
{
    use HasFactory;

    protected $table = 'favourite_book';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_book',
        'id_user',
    ];
    
    protected $casts = [
        'id_book' => 'integer',
        'id_user' => 'integer',
    ];
}
