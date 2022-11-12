<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LodgeController extends Controller
{
    public function edit()
    {
        return Inertia::render('Loja/Edit');
    }

    public function store(Request $request)
    {
        // return 'Store perfil da loja';
    }
}
