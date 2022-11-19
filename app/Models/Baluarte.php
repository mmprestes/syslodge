<?php

namespace App\Models;

use App\Traits\Tenantable;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Baluarte extends Model
{
    use  UUID, Tenantable;
    
    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'lodge_id',
    ];

}
