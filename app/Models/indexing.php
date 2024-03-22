<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indexing extends Model
{
    use HasFactory;

    protected $table = 'indexing';

    protected $fillable = [
        'file_path',
    ];

}

