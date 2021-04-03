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
            'cat_id'=> 'required|exists:cat,id',
            'vaccine_id'=> 'required|exists:vaccine,id',
            'curator_id'=> 'required|exists:curator,id',
            'date_vaccine'=> 'date|required',
        ];
    }
}
