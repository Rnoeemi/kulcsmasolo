<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kérjük, adja meg a nevét.',
            'email.required' => 'Kérjük, adja meg az e-mail címét.',
            'email.email' => 'Kérjük, érvényes e-mail címet adjon meg.',
            'message.required' => 'Kérjük, írja le üzenetét.',
            'message.max' => 'Az üzenet legfeljebb 5000 karakter lehet.',
        ];
    }
}
