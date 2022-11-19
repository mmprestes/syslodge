<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;


class TenantScope implements Scope
{

	public function apply(Builder $builder, Model $model) {
        $lodge_id = session()->get('lodge_id');
        if(isset($lodge_id)) {
            $builder->where('lodge_id', $lodge_id);
        }
	}
}