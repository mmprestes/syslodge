<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Inertia\Inertia;

class SecretariaController extends Controller
{
    
    /*
    * Home
    */
    public function home(){
        return Inertia::render('Secretaria/Home');
    }

}
