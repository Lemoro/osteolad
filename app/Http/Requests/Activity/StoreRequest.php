<?php

namespace App\Http\Requests\Activity;

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
            'title'        => 'required|string',
            'direction'    => 'required|string',
            'text'         => 'required|string',
            'keyword'      => 'required|string',
            'description'  => 'required|string',
            'image'        => 'required|file',
            'image_base64' => 'nullable|string',
        ];
    }
}
