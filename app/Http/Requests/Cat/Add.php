<?php

namespace App\Http\Requests\Cat;

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
            'name'=> 'required',
            'date_birthday'=> 'max:20',
            'photo'=> 'nullable',
            'cat_story'=> 'nullable',
            'cat_come_in'=> 'nullable',
            'status'=> 'nullable',

        ];
    }


}
