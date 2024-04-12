<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, string>
     */
    public function rules(): array
    {
        $userId = auth()->id(); // Récupérer l'ID de l'utilisateur authentifié
        return [
            'nom' => 'required|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/',
            'prenom' => 'required|regex:/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/',
            'email' => 'required|regex:/^[A-Za-z]+[A-Za-z0-9._%+-]+@+[A-Za-z][A-Za-z0-9.-]+.[A-Za-z]{2,}$/|unique:users,email,' . $userId,
            'telephone' => 'required|regex:/^7[0-9]{8}$/|unique:users,telephone,' . $userId,
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est requis.',
            'prenom.required' => 'Le prénom est requis.',
            'email.required' => "L'adresse email est requise.",
            'email.regex' => "Le format de l'adresse email est incorrect.",
            'email.unique' => "Cette adresse email est déjà utilisée.",
            'telephone.required' => 'Le numéro de téléphone est requis.',
            'telephone.regex' => 'Le format du numéro de téléphone est incorrect.',
            'telephone.unique' => 'Ce numéro de téléphone est déjà utilisé.',
        ];
    }
}
