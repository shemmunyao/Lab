<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'make' => 'required',
            'model' => 'required',
            'produced' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'make.required' => 'Make is required',
            'model.required' => 'Model is required',
            'produced.required' => 'Produced on is required',
        ];
    }
}
