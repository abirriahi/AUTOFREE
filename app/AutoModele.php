<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoModele extends Model
{
    protected  $table = "autos_modele";

   protected $fillable = [
       'autos_model','auto_marque_id',
       'motos_model','moto_marque_id',
       'vehicules_model','vehicule_marque_id',
       'camions_model','camion_marque_id',
       'campings_model','camping_marque_id',
       'remorques_model','remorque_marque_id'

   ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }

    public function marque()
    {
        return $this->belongsTo('App\AutoMarque', 'auto_marque','id');
    }
    public function Motomarque()
    {
        return $this->belongsTo('App\AutoMarque', 'moto_marque','id');
    }
   public function vehiculemarque()
    {
        return $this->belongsTo('App\AutoMarque', 'vehicule_marque','id');
    }
    public function Remorquemarque()
    {
        return $this->belongsTo('App\AutoMarque', 'remorque_marque','id');
    }
    public function Camionmarque()
    {
        return $this->belongsTo('App\AutoMarque', 'camion_marque','id');
    }
    public function Campingmarque()
    {
        return $this->belongsTo('App\AutoMarque', 'camping_marque','id');
    }

}
