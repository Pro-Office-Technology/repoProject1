<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\indexfield;

class recordtype extends Model
{
    use HasFactory;

    protected $table = 'recordtype';

    protected $fillable = [
        'filename',
        'description',
    ];

    public function indexfields()
    {
        return $this->belongsToMany(indexfield::class);
    }
}

