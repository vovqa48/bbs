<?php

namespace App\Http\Requests\Vaccine;

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
            'name'=> 'required|max:30',
            'regularity_id'=> 'required|exists:regularitys,id',
            'method_id'=> 'required|exists:methods,id',
            'description'=> 'required',
            'view_id'=> 'required|exists:views,id',
            'photo'=> 'nullable'

        ];
    }
}
