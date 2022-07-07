<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
         $rules = [
            
            'title' => ['required','min:6','max:200'],
            'description' => ['required'],
            'image' => ['required','image','max:2048']
         ];

            return $rules;
    }
}