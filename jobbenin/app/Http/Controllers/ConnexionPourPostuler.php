<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConnexionPourPostuler;

class ConnexionPourPostuler extends Controller
{

    public function index()
    {
        //
        return view('connexionpourpostuler');
    }
    public function connexionpourpostuler(Request $request)
    {

        $email = $request->email;
        $password = $request->password;


            $user = User::where('email', "=", $email)->first();
            $offre = Offre::find($id_offre);
  
        if (Auth::attempt(['email' => $email, 'password' => $password])) {


            if ($user) {

                if ($user->role == 'postulant') {
                     return redirect()->intended ('postuleroffre', ['id_offre' => $offre->id])   ;
                } 
            }
          
        }
        elseif (!$user) {
            // L'utilisateur n'existe pas dans la base de données
            return redirect()->back()->withErrors(['email' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }

        // Vérifier si le mot de passe est correct
        if (!Hash::check($password, $user->password)) {
            // Le mot de passe est incorrect
            return redirect()->back()->withErrors(['password' => 'Adresse Email ou Mot de passe incorrect'])->withInput();
        }
    } //
}
