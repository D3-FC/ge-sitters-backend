<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description' => "max:10000",
            'child_count' => "required|min:1|not_in:0",
            'start_at' => 'required|date|after:today',
            'end_at' => 'required|date|after:start_at',
        ];
    }
}
