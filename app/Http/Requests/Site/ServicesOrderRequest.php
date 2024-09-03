<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ServicesOrderRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|string|min:10|max:15',
            'title_message' => 'required|string|min:5|max:255',
            'message' => 'required|string|min:5',
            // 'code_virfy' => 'required|string|min:4|max:4',
            'code' => 'required|string|min:4|max:4',
            'service_name_ar' => 'required|string|min:5|max:255',
            'service_name_en' => 'required|string|min:5|max:255',

        ];
    }
}
