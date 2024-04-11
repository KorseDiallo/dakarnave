<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FicheTravailRequest extends FormRequest
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
            'ownerItem' => 'required|string|max:255',
            'dknvItem' => 'required|string|max:255',
            'typeDemande' => 'nullable|string|in:ajout,modification,annuller',
            'titreElement' => 'required|string|max:255',
            'observation' => 'nullable|string',
            'dateSignaturePropriétaire' => 'required|date',
            'dateSignatureProductManager' => 'required|date',
            'prix' => 'required|integer',
            'tempLivraison' => 'nullable|string',
            'remarque' => 'nullable|string',
            'valider' => 'nullable|string',
            
        ];
    }

    public function messages(){
        return [
            'ownerItem.required' => 'Le champ "Owner Item" est requis.',
            'dknvItem.required' => 'Le champ "Dknv Item" est requis.',
            'typeDemande.in' => 'La valeur du champ "Type Demande" doit être parmi : ajout, modification, annueller.',
            'titreElement.required' => 'Le champ "Titre Element" est requis.',
            'dateSignaturePropriétaire.required' => 'Le champ "Date Signature Propriétaire" est requis.',
            'dateSignatureProductManager.required' => 'Le champ "Date Signature Product Manager" est requis.',
            'prix.required' => 'Le champ "Prix" est requis.',
            'prix.integer' => 'Le champ "Prix" doit être un entier.',
            


        ];
    }
}
