<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SecretariaController extends Controller
{
    
    /*
    * Home
    */
    public function home(){
        $users = User::all();
        return Inertia::render('Secretaria/Home', ['users' => $users]);
    }

}
