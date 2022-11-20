<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Lodge;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Mail as Mail;
use App\Mail\NewLodgeMail;
use Inertia\Inertia;

use App\Jobs\ProcessNewLodge;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'lodge_name' => 'required|string|max:255',
            'lodge_number' => 'required|string|max:4',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if(!is_null($request->input('cnpj'))) {
            $request->validate([
                'cnpj' => 'cnpj'
            ]);
        }

        $lodge = Lodge::create([
            'name' => $request->lodge_name,
            'number' => $request->lodge_number,
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $lodge->users()->save($user);

        event(new Registered($user));

        Auth::login($user);

        $message = (new NewLodgeMail($user))
                ->onQueue('emails');
        Mail::to($user)->queue($message);

        return redirect(RouteServiceProvider::HOME);
    }
}
