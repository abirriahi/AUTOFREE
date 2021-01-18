<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detaille extends Model
{
    protected  $table = "detailles";


   protected $fillable = [
       'type', 'auto_categorie', 'auto_carburan', 'autos_carrosserie', 'cv',
       'porte', 'ville', 'auto_colorex', 'auto_coloren',
       'PoidsRemorque', 'auto_km', 'consommations', 'Emission_CO2', 'Cylindree',
       'cathe_energeri', 'auto_vitesse', 'Roues', 'auto_siege'
   ];







}
