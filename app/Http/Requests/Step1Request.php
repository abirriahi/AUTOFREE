<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Step1Request extends Request
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

            'new_marque' => 'required|max:255',
            'new_modele' => 'required|max:255',
            'auto_year' => 'required',
            'auto_month' => 'required',
            'auto_categorie' => 'required',
             'ville' => 'required',




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
           // 'Cylindree' => 'required|max:255',
           'Emission_CO2' => 'required|max:255',
            'consommations' => 'required|max:255',
          // 'normes' => 'required|max:255',
           // 'cathe_energeri' => 'required|max:255',
           'auto_km' => 'required|max:255',

        ];
    }
}
