<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class JoinUsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'email'=>'required|email',
            'mobile'=>'required',
            'cv'=>'required',

        ];
    }

    public function messages(): array
    {
        $lang = Session::get('lang', 'en');
        app()->setLocale($lang);

        return [
            'name.required' => __('general.name-required'),
            'email.required' => __('general.email-required'),
            'message.required' => __('general.message-required'),
            'mobile.required' => __('general.mobile-required'),
            'subject.required' => __('general.subject-required'),
            'name.string' => __('general.name-string'),
            'email.email' => __('general.email-email'),
        ];
    }
}
