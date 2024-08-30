<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'in:homme,femme,autre'],
            'nom_utilisateur' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            // 'email' => $request->email,
            // 'password' => Hash::make($request->password),
        ]);

        $admin = Admin::create([
            'user_id'=>$user->id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'nom_utilisateur' => $request->nom_utilisateur,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'type_user' => $request->type_user,
        ]);

        event(new Registered($admin));

        Auth::login($admin);

        return redirect()->route('dashboard');
    }
}
