<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'identity' => 'required|string|unique:clients',
            'name' => 'required|string',
            'queue_id' => 'required|exists:queues,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'identity.required' => 'Identidad es Requerida',
            'identity.unique' => 'Ya existe esa Identidad',
            'name.required' => 'Nombre es Requerido',
            'name.string' => 'Nombre debe ser Texto',
            'queue_id.required' => 'La cola es Requerida',
            'queue_id.exists' => 'La cola debe Existir',
        ];
    }
}
