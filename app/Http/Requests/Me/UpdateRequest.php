<?php namespace App\Http\Requests\Me;

use \Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'required|max:255',
            'email' => 'sometimes|required|email|max:255|unique:users,email,'.$this->user()->id,
            'password' => 'required|min:6|confirmed',
            'phone' => 'max:128'
        ];
    }
}
