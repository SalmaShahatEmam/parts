<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|min:4',
            "phone" => "required|regex:/^[0-9]{9}$/",
            "topic" =>"required|min:5"
        ];
    }


 /*     public function messages()
    {
        return [
            'name.required' => __('The name field is required.'),
            'name.min' => __('The name must have at least 3 characters.'),

            'email.required' => __('The email field is required.'),
            'email.email' => __('The email must be a valid email address.'),

            'message.required' => __('The message field is required.'),
            'message.min' => __('The message must be at least 4 characters long.'),

            'phone.required' => __('The phone number field is required.'),
            'phone.regex' => __('The phone number must be 9 digits.'),

            'topic.required' => __('The topic field is required.'),
            'topic.min' => __('The topic must have more than 5 letters.'),
        ];
    }
 */

}
