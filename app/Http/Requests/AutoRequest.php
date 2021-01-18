<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AutoRequest extends Request
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


            'new_marque' => 'required|min:3|max:255',
            'new_model' => 'required|max:255',
            'auto_year' => 'required',
            'auto_month' => 'required',
            'auto_categorie' => 'required',
            'auto_carburan' => 'required',




            'auto_colorex' => 'required|max:255',
            'auto_coloren' => 'required|max:255',
            'Roues' => 'required|max:255',
            'porte' => 'required|max:255',
            'auto_siege' => 'required|max:255',
            'autos_carrosserie' => 'required|max:255',
            'PoidsRemorque' => 'required|max:255',
            'cv' => 'required|max:255',
            'auto_vitesse' => 'required|max:255',
            'auto_price' => 'required|max:255',
            'image' => 'mimes:png,jpg,jpeg,gif',

            'auto_km' => 'required',


            'num_tel' => 'required',
            'auto_description' => 'required|max:10000000|min:3',
            'adresse' => 'required|max:255',
            'email' => 'required|max:255',


            /*'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
           'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
             'auto_model' => 'required|max:255',
           'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
           'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',
            'auto_model' => 'required|max:255',*/
        ];
    }
}
