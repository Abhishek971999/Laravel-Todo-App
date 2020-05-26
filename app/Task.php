<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    protected $table = 'todo';
    protected $fillable = [
        'title',
        'desc'
    ];
}
