<?php

namespace App\Http\Requests\contact;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z]+(?:\s*[a-zA-Z]+)+$/'],
            'email' => ['required', 'email:rfc,dns', 'string'],
            'company_name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'mobile' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:15'],
            'subject' => ['required', 'string'],
            'message' => ['nullable', 'string']
        ];
    }

    public function attributes()
    {
        return [
            'mobile' => 'Contact Number',
        ];
    }
}
