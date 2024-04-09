<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class updateClientRequest extends FormRequest
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
            'raisonSocial' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',

            'montantPlafond' => 'required|numeric|max:9999999999.99999',
            'client' => 'nullable|string',
            'fournisseur' => 'nullable|string',

            'nomBanque' => 'required|string|max:255',
            'adresseBancaire' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'iban' => 'required|string|max:255',
            'swift' => 'required|string|max:255',
            
        ];
    }
    function messages()
{
    return [
        'raisonSocial.required' => 'Le champ Raison sociale est requis.',
        'raisonSocial.string' => 'Le champ Raison sociale doit être une chaîne de caractères.',
        'raisonSocial.max' => 'Le champ Raison sociale ne doit pas dépasser :max caractères.',

        'nom.required' => 'Le champ Nom est requis.',
        'nom.string' => 'Le champ Nom doit être une chaîne de caractères.',
        'nom.max' => 'Le champ Nom ne doit pas dépasser :max caractères.',
        'nom.unique' => 'L\'adresse e-mail fournie est déjà utilisée par un autre utilisateur',


        'adresse.required' => 'Le champ Adresse est requis.',
        'adresse.string' => 'Le champ Adresse doit être une chaîne de caractères.',
        'adresse.max' => 'Le champ Adresse ne doit pas dépasser :max caractères.',

        'telephone.required' => 'Le champ Téléphone est requis.',
        'telephone.string' => 'Le champ Téléphone doit être une chaîne de caractères.',
        'telephone.max' => 'Le champ Téléphone ne doit pas dépasser :max caractères.',

        'email.required' => 'Le champ Email est requis.',
        'email.string' => 'Le champ Email doit être une chaîne de caractères.',
        'email.email' => 'Le champ Email doit être une adresse email valide.',
        'email.unique' => 'Email existe déjà',

        'montantPlafond.required' => 'Le champ Montant plafond est requis.',
        'montantPlafond.numeric' => 'Le champ Montant plafond doit être numérique.',
        'montantPlafond.max' => 'Le champ Montant plafond ne doit pas dépasser :max.',

        'client.string' => 'Le champ Client doit être un string',
        'fournisseur.string' => 'Le champ Fournisseur doit être un string',

        'nomBanque.required' => 'Le nom de la banque est requis.',
        'nomBanque.string' => 'Le nom de la banque doit être une chaîne de caractères.',
        'nomBanque.max' => 'Le nom de la banque ne doit pas dépasser :max caractères.',
        'adresseBancaire.required' => 'L\'adresse bancaire est requise.',
        'adresseBancaire.string' => 'L\'adresse bancaire doit être une chaîne de caractères.',
        'adresseBancaire.max' => 'L\'adresse bancaire ne doit pas dépasser :max caractères.',
        'pays.required' => 'Le pays est requis.',
        'pays.string' => 'Le pays doit être une chaîne de caractères.',
        'pays.max' => 'Le pays ne doit pas dépasser :max caractères.',
        'iban.required' => 'L\'IBAN est requis.',
        'iban.string' => 'L\'IBAN doit être une chaîne de caractères.',
        'iban.max' => 'L\'IBAN ne doit pas dépasser :max caractères.',
        'swift.required' => 'Le code SWIFT est requis.',
        'swift.string' => 'Le code SWIFT doit être une chaîne de caractères.',
        'swift.max' => 'Le code SWIFT ne doit pas dépasser :max caractères.',
       
    ];
}

}
