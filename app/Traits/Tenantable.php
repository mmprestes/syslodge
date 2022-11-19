<?php

namespace App\Traits;

use App\Models\Lodge;
use App\Scopes\TenantScope; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait Tenantable
{
    protected static function bootTenantable()
    {

        static::addGlobalScope(new TenantScope);

        $lodge_id = session('lodge_id');

        if(!is_null($lodge_id))
        {
            static::creating(function (Model $model) {
                $model->lodge_id = session('lodge_id');;
            });
        }
    }

    /**
     * Get the user that owns the Tenantable
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lodge(): BelongsTo
    {
        return $this->belongsTo(Lodge::class);
    }

}


