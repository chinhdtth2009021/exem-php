<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'bookId',
        'authorId',
        'title',
        'ISBN',
        'attributes ',
        'default',
        'comment',
        'extra',
        'status',
    ];
}
