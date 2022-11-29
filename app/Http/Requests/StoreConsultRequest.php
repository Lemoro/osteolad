<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultRequest extends FormRequest
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
            'name'     => 'required|string',
            'question' => 'required|string',
            'email'    => 'nullable|email',

        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Поле "Ваше имя" обязательно для заполнения',
            'question.required' => 'Поле "Вопрос специалисту" обязательно для заполнения',
            'email.email'       => 'неверный формат почты',
        ];
    }
}
