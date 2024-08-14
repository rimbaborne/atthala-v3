<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            // 'name'     => 'required|string|min:3|max:50',
            // 'email'    => 'required|unique:users|email',
            // 'password' => 'required|string|min:6|max:50',
        ];
    }

    public function rulesCreate(): array
    {
        return [
            'name'     => 'required|string|min:3|max:50',
            'email'    => 'required|unique:users|email',
            'password' => 'required|string|min:6|max:50',
            'phone_number' => ['number', 'max:14'],

        ];
    }

    public function rulesUpdate(): array
    {
        return [
            'name'     => 'required|string|min:3|max:50',
            'role'     => 'nullable|exists:roles,id',
        ];
    }
    public function rulesUpdatePassword(): array
    {
        return [
            'password' => 'required|string|min:6|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama diperlukan',
            'name.min' => 'Password minimal 3 karakter',
            'password.min' => 'Password minimal 6 karakter',
        ];
    }
}
