<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppelis extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'year', 'ratings', 'imdbID', 'id_user', 'poster'];
}
