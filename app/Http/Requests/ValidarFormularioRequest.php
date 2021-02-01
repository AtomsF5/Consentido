<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularioRequest extends FormRequest
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
            'mensaje.required'   => 'El mensaje es obligatorio.',
            'mensaje.min'        => 'El mensaje debe contener min 30 letra.',
            'mensaje.max'        => 'El mensaje debe contener max 500 letras.',

            'telefono.required'   => 'El telefono es obligatorio.',
            'telefono'        => 'El telefono debe contener 9 digitos.',
        ];
    }
}
