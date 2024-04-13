<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom'=>'required|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/',
            'prenom'=>'required|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/',
            'email'=>'required|unique:users,email|regex:/^[A-Za-z]+[A-Za-z0-9._%+-]+@+[A-Za-z][A-Za-z0-9.-]+.[A-Za-z]{2,}$/',
            'password'=>'required|regex:/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#$%^&+=!])(.{8,})$/',
            'confirmPassword'=>'required|same:password|regex:/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#$%^&+=!])(.{8,})$/',
            'telephone' =>'required|regex:/^7[0-9]{8}$/|unique:users,telephone',
        ];
    }

    public function messages(){
        return [
            'nom.required'=>'le nom est requis',
            'prenom.regex'=>'format du prénom incorrect',
            'nom.regex'=>'format du nom incorrect',
            'prenom.required'=>'le prénom est requis',
            'email.required'=>'l\'email est requis',
            'email.unique'=>'l\'email existe déja',
            'email.regex'=>"format email incorrect",
            'password.required'=>'le mot de passe est requis',
            'confirmPassword.required'=>'la confirmation du mot de passe est requis',
            'confirmPassword.same'=>'mots de passe differents',
            'password.regex'=>"le mot de passe doit contenir au moins 8 caractéres avec un chiffre, une lettre et un caractére spécial",
            // 'confirmPassword.regex'=>"le mot de passe de confirmation doit contenir au moins 8 caractéres avec un chiffre, une lettre et un caractére spécial",
            'telephone.required'=>'le numéro de téléphone est requis',
            'telephone.unique'=>'le numéro telephone est deja utilisé',
            'telephone.regex'=>'le format du numéro est incorrect',

        ];
    }

    
}