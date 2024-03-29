<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\connexion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ConfirmationNotification;
use Illuminate\Support\Str;

class InscriptionController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('inscription');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function inscription(Request $request)
    {
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:recruteur,postulant,freelancer',
        ], [
            'name.required' => 'Veuillez saisir votre nom.',
            'name.regex' => 'Le nom ne doit contenir que des lettres et des espaces.',
            'email.required' => 'Veuillez saisir votre adresse e-mail.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'password.required' => 'Veuillez saisir votre mot de passe.',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'role.required' => 'Veuillez sélectionner votre rôle.',
            'role.in' => 'Rôle invalide.',
        ]);
      
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
      
        // Envoyer la notification d'inscription
        $user->notify(new ConfirmationNotification($user));
        return redirect()->route('welcome');
    }
    


  

}


