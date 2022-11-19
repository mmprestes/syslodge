<?php

namespace App\Models;

use App\Traits\Tenantable;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use Tenantable, UUID;

    protected $guardaded = [
        'id',
    ];
    
    protected $fillable = [
        'lodge_id',
        'name',
    ];
}
