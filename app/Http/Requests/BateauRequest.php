<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BateauRequest extends FormRequest
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
            'nombateau' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'longueur' => 'required|numeric',
            'largeur' => 'required|numeric',
            'vitesse' => 'required|numeric',
            'equipements' => 'required|array',
            'equipements.*' => 'exists:equipements,id',
        
        ];
    }
}
