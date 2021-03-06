<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => 'required|min:3|max:250|regex:/^[A-ZÀ-úa-z\s]+$/',
            "content" => 'required',
            "category" => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6000'

        ];
    }
    public function messages()
    {
        return [
            'title.regex' => 'O titulo só pode conter apenas espaços e letras'
        ];
    }
}
