<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected  $table = "moto";


    
    
    protected $fillable = [
       'moto_marque','moto_model','new_marque',
        'new_modele','existe','validation','enpublic','magazine',
        'autos_carrosserie','auto_categorie','auto_price',
        'auto_carburan','auto_km','auto_colorex','auto_siege',
        'auto_year','auto_month','auto_vitesse','PoidsRemorque','Roues',
        'auto_description','cv','metaliser','user_id','image','video',



        'created_at','updated_at',
        'num_tel','ABS','Carenage','Catalyseur','Coffre','autre_instrument','anti_vole',
        'dosseret','double_frein_disque','double_siege','guidant_special','haut_parleur',
        'housse_deprotection','marche_pieds','pare_brise','peinture_special','reglage_electrique',
        'pieds_cromee','poigne_chaffante','porte_bagage','pot_echapement','protection','roue_rayon',
        'sac_resevoir','sacoche','selle_monoplage','system_audio','systm_alarme','top_case','pneut_neuf',
        'VS_disponible','VS_possible','TS_disponible','TS_possible','echange_possible','leasing_possible',
        'moto_course', 'verrouillage_diferentiel','vehicule_accidente','Vehicule_non_accidentee',
        'adresse','email','expertiser','rayon',
        'garanti',
        'ville','Cylindree','Emission_CO2','consommations','normes','cathe_energeri','auto_vehicule'

   ];

    public function user()
    {

        return $this->belongsTo('App\User','user_id','id');
    }

    public function marque()
    {
        return $this->belongsTo('App\AutoMarque','moto_marque');
    }



    public function modele()
    {
        return $this->belongsTo('App\AutoModele','moto_modele');
    }

    public function images()
    {
        return $this->hasMany('App\MotoImages', 'moto_id','id');
    }

}
