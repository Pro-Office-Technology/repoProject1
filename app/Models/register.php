<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerProfile extends Model
{
    use HasFactory;

    protected $table = 'register';

    protected $fillable = [
        'filename',
        'description',
    ];
}
