<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected  $table = "vehicule";

   protected $fillable = [
        'vehicule_marque', 'vehicule_model', 'new_modele', 'new_marque','magazine','rayon',
       'existe', 'validation', 'enpublic', 'autos_carrosserie', 'auto_categorie',
       'auto_price', 'auto_carburan', 'auto_km', 'auto_colorex', 'auto_coloren', 'auto_siege',
       'auto_year', 'auto_month', 'auto_vitesse', 'PoidsRemorque', 'Roues', 'auto_description',
       'cv', 'porte', 'metaliser', 'user_id', 'image','video'

       , 'created_at', 'updated_at', 'num_tel',
       'acee_san_cle', 'chauffage', 'parcage', 'assistant', 'camera', 'capteur_arriere', 'capteur_avant1',
       'capteur_avant', 'climatisation_automatique', 'climatisation_manuell', 'control_stabilite', 'crochet_atelage',
       'dispositif_mail_libre', 'hard_top', 'bluetooth', 'isofix', 'jantes', 'phare_laser1', 'phare_laser', 'phare_xenon',
       'phare_derectionnel', 'reglage_desiege_electrique', 'reglage_de_distance', 'regleur_vitesse', 'radio_DAB',
       'sallerie_alcantara', 'sallerie_cuire', 'sallerie_partiellement_cuire', 'sallerie_tissu', 'siege_chauffant',
       'siege_ventilite', 'Suspension_augmente', 'Suspension_pneumatique', 'Toit_ouvrant', 'Verrouillage_du_differentiel',
       'Systeme_start_stop', 'jeux_de_pneus', 'Systeme_de_navigation_integrer', 'Systeme_de_navigation_Portable',
       'Systeme_de_navigation_Systeme_de_suivi_de_voie', 'Autobus_scolaires', 'Autotransporter',
       'Bache', 'Camion_de_meubles', 'Grue', 'Plateforme_de_levage', 'Porte_bagages', 'Transports_frigorlifique',
       'Treuil', 'Pour_handicapes', 'Pour_lexportation', 'Vehicule_accidentee', 'Vehicule_non_accidentee', 'adresse',
       'email', 'expertiser',
       'garanti', 'ville', 'Cylindree', 'Emission_CO2', 'consommations', 'normes', 'cathe_energeri', 'auto_vehicule'
   ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }




    public function vehiculemarque()
    {
        return $this->belongsTo('App\AutoMarque','vehicule_marque');
    }

    public function vehiculemodele()
    {
        return $this->belongsTo('App\AutoModele','vehicules_model');
    }




    public function images()
    {
        return $this->hasMany('App\VehiculeImages', 'vehicule_id','id');
    }

}
