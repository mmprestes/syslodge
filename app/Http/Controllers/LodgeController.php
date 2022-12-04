<?php

namespace App\Http\Controllers;

use App\Models\Lodge;
use App\Models\Potency;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Traits\Toast;

class LodgeController extends Controller {

    
    use Toast;

    public function edit()
    {
        $potencies = Potency::where('is_active',true)->get();
        // dd($potencies);

        $lodge = Lodge::find(session('lodge_id'));
        return Inertia::render('Loja/Edit', ['lodge' => $lodge, 'potencies' => $potencies]);
    }

    public function store(Request $request)
    {
        // validate
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|min:1|max:4',
            'rite' => 'string|max:255|nullable',
            'potency_id' => 'numeric|nullable',
            'session_day' => 'string|max:100|nullable',
            'founded_at' => 'date|string|nullable',
            'phone_number' =>'string|max:20|nullable',
            'email' =>'email|max:100|nullable',
            'address' => 'string|nullable',
            'cnpj' => 'cnpj|nullable',
        ]);
        
        $lodge = Auth::user()->lodge;

        $lodge->update($request->all());

        $this->showToast('Atualizado', 'Perfil da loja atualizad com sucesso', 'success', false);

        return redirect()->route('loja.edit');
    }
}
