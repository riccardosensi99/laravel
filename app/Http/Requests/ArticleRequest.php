<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name'=>'required',
            'brand'=>'required',
            'price'=>'required',
            'img'=>'image'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'nome obbligatorio',
            'price.required'=>'prezzo obbligatorio',
            'brand.required'=>'brand obbligatorio',
        ];
    }
}
