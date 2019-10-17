<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdSaveRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address' => 'required|min:3|max:50',
            'description' => 'required|max:10000|min:3',
            'start_at' => 'required|date|after:today',
            'end_at' => 'required|date|after:start_at',
        ];
    }
}
