<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Potency extends Model
{
    

    protected $guardaded = [
        'id',
    ];
    
    protected $fillable = [
        'name',
        'is_active',
    ];
}
