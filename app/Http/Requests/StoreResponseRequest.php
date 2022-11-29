<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResponseRequest extends FormRequest
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
            'name' => 'required|string',
            'text' => 'required|string',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Ваше имя" обязательно для заполнения',
            'text.required' => 'Поле "Ваш отзыв" обязательно для заполнения',

        ];
    }
}
