<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
            'first_name' => 'required|string',
            'phone'      => 'required|string',
            'message'    => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'    => 'Поле "Ваше имя" обязательно для заполнения',
            'phone.required'          => 'Поле "Номер телефона" обязательно для заполнения',
            'message.string' => '',
        ];
    }

}
