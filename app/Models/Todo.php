<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'completed',
        'position',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'completed' => 'boolean',
    ];

}
