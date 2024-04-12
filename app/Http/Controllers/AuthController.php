<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\NotifRegister;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\RegisterUserRequest;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    public function register()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterUserRequest $request)
    {
        //return 'bonjour';
        $user= new User();

        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->telephone= $request->telephone;
        if($request->password===$request->confirmPassword){
            $user->password=Hash::make( $request->password);
            $user->save();
        }
       // return redirect()->route('users.index')->with('success', 'Client ajouté avec succès.');

       // return 'good';
        // if ($user->save()) {
        //     $user->notify(new NotifRegister());
        //     return redirect('/');
        // }
    }


    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request)
    {
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
         // dd(auth()->attempt(['email' => $request->email, 'password' => $request->password]));
        
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            // Les informations d'identification sont correctes, rediriger l'utilisateur
            return redirect('/clients');
        }
        
        // Les informations d'identification sont incorrectes, afficher un message d'erreur
        return back()->withErrors('email et/ou mot de passe incorrect !!!!');
    }
    

    public function logout(){
        auth()->logout();
        return redirect('/');
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
}