<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camping extends Model
{
    protected  $table = "camping";


   protected $fillable = [
    'camping_marque', 'camping_model', 'new_marque', 'new_modele', 'existe','magazine','rayon',
    'validation', 'enpublic', 'autos_carrosserie', 'auto_categorie', 'auto_price',
    'auto_carburan', 'auto_km', 'auto_colorex', 'auto_coloren', 'auto_siege',
    'auto_year', 'auto_month', 'auto_vitesse', 'PoidsRemorque', 'Roues', 'auto_description',
    'cv', 'porte', 'metaliser', 'user_id', 'image','video',



       'created_at', 'updated_at', 'num_tel',
    'ABS', 'parcage', 'cuisine', 'anti_vole', 'douche', 'Regelateur_automatique',
    'climatisation_automatique', 'climatisation_manuell', 'control_stabiliter', 'crochet_atelage',
    'regulateur_vitesse', 'system_navigation_toilette', 'system_navigation_tv',

    'Systeme_de_navigation_integrer', 'Systeme_de_navigation_Portable',
    'Pour_handicapes', 'Vehicule_accidentee', 'Vehicule_non_accidentee', 'adresse', 'email',
    'expertiser', 'ville', 'Cylindree', 'Emission_CO2', 'consommations', 'normes', 'cathe_energeri', 'auto_vehicule'

   ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }

    public function marque()
    {
        return $this->belongsTo('App\AutoMarque','camping_marque');
    }



    public function modele()
    {
        return $this->belongsTo('App\AutoModele','campings_model');
    }

    public function images()
    {
        return $this->hasMany('App\CampingImages', 'camping_id','id');
    }

}
