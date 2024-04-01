<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\recordtype;
class indexfield extends Model
{
    use HasFactory;

    protected $table = 'indexfield';

    protected $fillable = [
        'name',
        'type',
        'length',

    ];

}
