<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'Book_ID';
    
    protected $fillable = [
        'Book_Title',
        'Book_Publisher',
        'Book_Author',
        'Book_Publish',
        'Book_Volume',
        'photo'
    ];
}
