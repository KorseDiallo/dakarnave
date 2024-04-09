<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactureRequest extends FormRequest
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
        'numeroFacture' => 'required|integer',
        'debutTravaux' => 'required|date',
        'finTravaux' => 'required|date|after_or_equal:debutTravaux',
        'detailTravaux' => 'nullable|string',
        'montantBrut' => 'required|numeric|min:0',
        'reductionDiscussion' => 'required|numeric|min:0',
        'reductionRabaisFlotte' => 'required|numeric|min:0',
        'reductionRabaisNavire' => 'required|numeric|min:0',
        'langue' => 'required|in:fr,us',
        'devise' => 'required|in:fcfa,euro,dollar',
        'valider' => 'nullable|string',
        
        ];
    }

    public function messages(){
        return [
        'numeroFacture.required' => 'Le champ Numéro de facture est requis.',
        'numeroFacture.integer' => 'Le champ Numéro de facture doit être un entier.',
        'debutTravaux.required' => 'Le champ Début des travaux est requis.',
        'debutTravaux.date' => 'Le champ Début des travaux doit être une date valide.',
        'finTravaux.required' => 'Le champ Fin des travaux est requis.',
        'finTravaux.date' => 'Le champ Fin des travaux doit être une date valide.',
        'finTravaux.after_or_equal' => 'La date de fin des travaux doit être postérieure ou égale à la date de début des travaux.',
        'detailTravaux.string' => 'Le champ Détail des travaux doit être une chaîne de caractères.',
        'montantBrut.required' => 'Le champ Montant brut est requis.',
        'montantBrut.numeric' => 'Le champ Montant brut doit être un nombre.',
        'montantBrut.min' => 'La valeur du champ Montant brut doit être supérieure ou égale à 0.',
        'reductionDiscussion.required' => 'Le champ Réduction discussion est requis.',
        'reductionDiscussion.numeric' => 'Le champ Réduction discussion doit être un nombre.',
        'reductionDiscussion.min' => 'La valeur du champ Réduction discussion doit être supérieure ou égale à 0.',
        'reductionRabaisFlotte.required' => 'Le champ Réduction rabais flotte est requis.',
        'reductionRabaisFlotte.numeric' => 'Le champ Réduction rabais flotte doit être un nombre.',
        'reductionRabaisFlotte.min' => 'La valeur du champ Réduction rabais flotte doit être supérieure ou égale à 0.',
        'reductionRabaisNavire.required' => 'Le champ Réduction rabais navire est requis.',
        'reductionRabaisNavire.numeric' => 'Le champ Réduction rabais navire doit être un nombre.',
        'reductionRabaisNavire.min' => 'La valeur du champ Réduction rabais navire doit être supérieure ou égale à 0.',
        'langue.required' => 'Le champ Langue est requis.',
        'langue.in' => 'La valeur du champ Langue n\'est pas valide.',
        'devise.required' => 'Le champ Devise est requis.',
        'devise.in' => 'La valeur du champ Devise n\'est pas valide.',
        'valider.string' => 'Le champ Valider doit être un string .',
       
        ];
    }
}
