<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Step4Request extends Request
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


            'auto_description' => 'required|max:300',
            'num_tel' => 'required',
            'email' => 'required',
            'adresse' => 'required',


        ];
    }
}
