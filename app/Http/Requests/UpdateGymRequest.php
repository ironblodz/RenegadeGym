<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGymRequest extends FormRequest
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
            'title' => 'required|min:3|max:100|regex:/^[A-ZÀ-úa-z\s]+$/',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:7000',
            'description' => 'required',
            'address' => 'required',
            'category' => 'required',
        ];
    }
}
