<?php

namespace App\Http\Requests\CatsVaccine;

use Illuminate\Foundation\Http\FormRequest;

class Add extends FormRequest
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
            'cat_id'=> 'required',
            'vaccine_id'=> 'required',
            'curator_id'=> 'required',
            'date_vaccine'=> 'required',
        ];
    }
}
