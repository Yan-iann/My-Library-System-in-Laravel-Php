<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class librarian extends Model
{
    use HasFactory;

    protected $table = 'lib';
    
    protected $fillable = [
        'Lib_FName',
        'Lib_MName',
        'Lib_LName',
        'Lib_Email',
        'Lib_User',
        'Lib_Pw',
    ];
}
