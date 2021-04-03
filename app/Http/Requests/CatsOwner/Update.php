<?php

namespace App\Http\Requests\CatsOwner;

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
            'cat_id'=> 'required|exists:cats,id',
            'owner_id'=> 'required|exists:owners,id',
            'date_adopted'=> 'date|required',
            'date_rejected'=> 'nullable',
        ];
    }
}
