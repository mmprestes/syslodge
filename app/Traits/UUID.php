<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Model;


trait UUID
{

    public static function boot() {
        parent::boot();

        static::creating(function(Model $model) {
            if (empty($model->id)) {
                $model->id = \Str::uuid();
            }
        });
    }

    // Tells the database not to auto-increment this field
    public function getIncrementing ()
    {
        return false;
    }

    // Helps the application specify the field type in the database
    public function getKeyType ()
    {
        return 'string';
    }

}