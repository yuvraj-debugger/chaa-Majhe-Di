<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'title',
        'status',
        'created_by'
    ];

    /**
     * Get the user who created this role.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
