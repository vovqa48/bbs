<?php

namespace App\Http\Requests\Owner;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'name'=> 'required|max:20',
            'surname'=> 'required|max:25',
            'phone'=> 'required',
            'vk_acc'=> 'nullable',
            'insta_acc'=> 'nullable',
            'adress'=> 'nullable'
        ];
    }
}
