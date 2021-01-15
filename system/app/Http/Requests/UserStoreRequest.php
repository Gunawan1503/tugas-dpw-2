<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
        ];
    }

    function messages(){
        return [
            'nama.required' => 'Field Nama Wajib Diisi',
            'username.required' => 'Field Username Wajib Diisi',
            'email.required' => 'Field Email Wajib Diisi',
            'username.unique' => 'Username Tersebut Sudah Terdaftar',
            'email.email' => 'Field Harus Diisi Dengan Email Yang Terdaftar'
        ];
    }
}
