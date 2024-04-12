<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemoRequest extends FormRequest
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
            'amarrageNavire' => 'required|date',
            'owner' => 'required|string|max:255',
            'desamarrageNavire' => 'required|date',
            'valider' => 'nullable|string',
            
           
        ];
    }

    public function messages(){
        return [
            'amarrageNavire.required' => 'Le champ est obligatoire',
            'amarrageNavire.date' => 'Le champ est de type date',
            'owner.required' => 'Le champ est obligatoire',
            'owner.string' => 'Le champ est de type chaine de caractères',
            'desamarrageNavire.required' => 'Le champ est obligatoire',
            'desamarrageNavire.date' => 'Le champ est de type date'
        ];
    }
}
