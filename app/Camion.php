<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    protected  $table = "camions";

   protected $fillable = [
       'camion_marque','camion_model','new_marque','new_modele','magazine','rayon',

       'auto_vehicule',
       'autos_carrosserie', 'auto_categorie',
       'auto_price' ,
       'auto_carburan',

       'auto_km',
       'auto_colorex',
       'auto_coloren','auto_siege',
       'auto_year', 'auto_month',
       'enpublic','existe',
       'auto_vitesse','PoidsRemorque','Roues',
       'validation','auto_description','cv','num_tel','porte',
       'metaliser' ,'user_id',
        'image','video',
       'acee_san_cle',
       'chauffage','parcage',
       'assistant','camera',
       'capteur_arriere'
       ,'garanti'
       ,'capteur_avant1','capteur_avant','climatisation_automatique',
       'climatisation_manuell','control_stabilite','adresse','email', 'ville','expertiser',

       'crochet_atelage', 'dispositif_mail_libre', 'hard_top', 'bluetooth', 'isofix',
       'jantes', 'phare_laser1', 'phare_laser', 'phare_xenon', 'phare_derectionnel',
       'reglage_desiege_electrique', 'reglage_de_distance', 'regleur_vitesse', 'radio_DAB',
       'sallerie_alcantara','Toit_ouvrant','Verrouillage_du_differentiel', 'sallerie_cuire',
       'sallerie_partiellement_cuire', 'sallerie_tissu',
       'siege_chauffant', 'siege_ventilite', 'Suspension_augmente',
       'Suspension_pneumatique','jeux_de_pneus',
       'Systeme_start_stop',
       'Systeme_de_navigation_integrer',
       'Systeme_de_navigation_Portable',
       'Systeme_de_navigation_Systeme_de_suivi_de_voie', 'Autobus_scolaires', 'Autotransporter',
       'Bache', 'Camion_de_meubles', 'Grue', 'Plateforme_de_levage', 'Porte_bagages',
       'Transports_frigorlifique', 'Treuil', 'Pour_handicapes', 'Pour_lexportation',
       'Vehicule_accidentee','Vehicule_non_accidentee','moto_marque','moto_model','Cylindree','Emission_CO2','consommations',
       'normes','cathe_energeri'


   ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }

    public function marque()
    {
        return $this->belongsTo('App\AutoMarque','camion_marque');
    }



    public function modele()
    {
        return $this->belongsTo('App\AutoModele','camions_model');
    }

    public function images()
    {
        return $this->hasMany('App\CamionImages', 'camion_id','id');
    }

}
