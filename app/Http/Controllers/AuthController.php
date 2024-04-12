<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Notifications\NotifRegister;
use Illuminate\Support\Facades\Auth;
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
        $users = User::where('role', 'admin')
                        ->where('estArchive',0)
                        ->paginate(10);
    
        return view('users.index', compact('users'));
    }

    public function index_archives()
    {
        $users = User::where('role', 'admin')
                        ->where('estArchive',1)
                        ->paginate(10);
    
        return view('users.indexArchives', compact('users'));
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
        return redirect()->route('users.index')->with('success', 'Administrateur ajouté avec succès.');

    }


    public function login(){
        return view('users.login');
    }

    public function authenticate(LoginRequest $request)
    {
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
         // dd(auth()->attempt(['email' => $request->email, 'password' => $request->password]));
        
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            // Les informations d'identification sont correctes, rediriger l'utilisateur
            if(Auth::user()->estArchive === 1){
                return redirect('/');

            }
    
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
    public function edit(User $user)
    {
        return view('users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $user->telephone= $request->telephone;
        $user->save();
        if(Auth::user()->role === 'admin'){
        return redirect()->route('clients.index');
        }
        return redirect()->route('users.index')->with('success', 'Profil mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(User $user)
     {
         $user->estArchive = true;
         $user->save();
         return redirect()->route('users.index')->with('success', 'Client archive avec succès.');
     }

     public function desarchiver(User $user)
     {
         $user->estArchive = false;
         $user->save();
         return redirect()->route('users.indexArchives')->with('success', 'Client desarchive avec succès.');
     }
}