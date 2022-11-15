<?php

namespace App\Traits;

use Illuminate\Support\Facades\Request;

trait Toast
{
    protected function showToast(string $title, string $message = null, string $type = 'success', bool $alwaysShow = false)
    {
        $toast = [
            'title'      => $title,
            'message'    => $message,
            'type'       => $type,
            'alwaysShow' => $alwaysShow
        ];
 
        Request::session()->flash('toast', $toast);
    }
}