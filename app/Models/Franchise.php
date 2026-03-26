<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $fillable = [
        'name',
        'email',
        'number',
        'area',
        'address',
        'message',
        'model_type'
    ];
}
