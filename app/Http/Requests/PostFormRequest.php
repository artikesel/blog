<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
    public function rules() {
        return [
            'text'=> 'required|min:2',
            'submit'=>''
        ];
    }
    public function messages() {
        return[
            'text.required' => 'Напишите ваше сообщение',
            'text.min' => 'Ваше сообщение должно быть больше 2 символов',
        ];
    }
}
