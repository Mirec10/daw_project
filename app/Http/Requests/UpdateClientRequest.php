<?php

namespace App\Http\Requests;

class UpdateClientRequest extends CreateClientRequest
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
            'name_sk' => 'required|max:255',
            'name_de' => 'required|max:255',
            'image' => 'file|image|nullable'
        ];
    }
}
