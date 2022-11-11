<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Lodge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'is_active',
    ];

    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot() {
        parent::boot();

        static::creating(function(Model $model) {
            if (empty($model->id)) {
                $model->id = Str::uuid();
            }
        });
    }

   
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    
    

}
