<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remorque extends Model
{
    protected  $table = "remorques";


protected $fillable = [
   'remorque_marque','remorque_model','new_marque','rayon',
    'new_modele','existe','validation','enpublic','magazine',
    
    'autos_carrosserie','auto_categorie','auto_price','auto_carburan',
    'auto_km','auto_colorex','auto_coloren','auto_siege','auto_year','auto_month',
    'auto_vitesse','PoidsRemorque','Roues','auto_description','cv','porte','metaliser',
    'user_id','image','created_at','updated_at','num_tel','ABS',
    'frein_comprimer',
    'frein_disque','hydrautique','pneumatique','referoidissement','Grue','Treuil',
    'Vehicule_accidentee','adresse','email','expertiser','garanti','ville','Cylindree',
    'Emission_CO2','consommations','normes','cathe_energeri','auto_vehicule',
    'video'

   ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }

    public function marque()
    {
        return $this->belongsTo('App\AutoMarque','remorque_marque');
    }



    public function modele()
    {
        return $this->belongsTo('App\AutoModele','remorques_model');
    }

    public function images()
    {
        return $this->hasMany('App\RemorqueImages', 'remorque_id','id');
    }

}
