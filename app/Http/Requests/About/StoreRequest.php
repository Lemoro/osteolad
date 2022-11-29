<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'keywords' => 'required|string',
            'description' => 'required|string',
            'about_text' => 'required|string',
            'signature'  => 'required|string',
            'about_img'  => 'required|file',
        ];
    }
}
