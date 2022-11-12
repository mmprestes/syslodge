<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Inertia\Inertia;

class ChancelariaController extends Controller
{
    
    /*
    * Home
    */
    public function home(){
        return Inertia::render('Chancelaria/Home');
    }

}
