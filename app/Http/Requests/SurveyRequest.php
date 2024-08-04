<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class SurveyRequest extends FormRequest
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
            'mobile'=>'required',
            'email'=>'required|email',
            'survey1'=>'required',
            'survey2'=>'required',
            'survey3'=>'required',
            'survey4'=>'required',
            'survey5'=>'required',
            'survey6'=>'required',

        ];
    }

    public function messages(): array
    {
        $lang = Session::get('lang', 'en');
        app()->setLocale($lang);

        return [
            'name.required' => __('general.name-required'),
            'mobile.required' => __('general.mobile-required'),
            'name.string' => __('general.name-string'),
        ];
    }
}
