<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Это поле должно быть строкой',
            'email.email' => 'Это поле должно соответствовать формату mail@some.domain',
            'email.unique' => 'Такой адрес электронной почты уже зарегистрирован',
            'password.required' => 'Это поле необходимо для заполнения',
            'password.string' => 'Это поле должно быть строкой'
        ]; 
    }
}