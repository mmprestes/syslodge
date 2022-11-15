<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Traits\Toast;

class LodgeController extends Controller {

    
    use Toast;

    public function edit()
    {
        $lodge = Auth::user()->lodge;
        return Inertia::render('Loja/Edit', ['lodge' => $lodge,]);
    }

    public function store(Request $request)
    {
        // validate
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|min:1|max:4',
            'rite' => 'string|max:255|nullable',
            'potency' => 'string|max:255|nullable',
            'session_day' => 'string|max:100|nullable',
            'founded_at' => 'date|string',
            'phone_number' =>'string|max:20|nullable',
            'email' =>'email|max:100|nullable',
            'address' => 'string|nullable',
        ]);

        $lodge = Auth::user()->lodge;
        $lodge->name = $request->name;
        $lodge->number = $request->number;
        $lodge->rite = $request->rite;
        $lodge->potency = $request->potency;
        $lodge->session_day = $request->session_day;
        $lodge->founded_at  = $request->founded_at;
        $lodge->phone_number = $request->phone_number;
        $lodge->email = $request->email;
        $lodge->address = $request->address;

        $lodge->save();
        
        // $toast = ['toast' => [
        //     'title'   => 'Sucesso',
        //     'message' => 'Perfil da loja atualizad com sucesso',
        //     'type'    => 'success'
        // ]];

        $this->showToast('Atualizado', 'Perfil da loja atualizad com sucesso', 'success', false);
        // $this->showToast('Atualizado com sucesso!');
 

        return redirect()->route('loja.edit');
    }
}
