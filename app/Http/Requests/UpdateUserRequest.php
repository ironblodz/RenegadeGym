<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
       return [
           "name" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
           "email" => 'required|email|unique:users,email,'.$this->user->id,
           "role" => 'sometimes|in:N,A',
           'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000'
       ];
   }
   public function messages()
   {
       return [
           'name.regex' => 'O nome deve conter apenas letras e espaços'
       ];
   }

}
