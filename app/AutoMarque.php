<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoMarque extends Model
{
    protected  $table = "autos_marque";


   protected $fillable = [
       'auto_marque',
       'moto_marque',
       'vehicule_marque',

       'camion_marque',
       'camping_marque',
       'remorque_marque',
       'type'
   ];

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }


      public function modeles()
    {
        return $this->hasMany('App\AutoModele','auto_marque_id','id');
    }


    public function Motomodeles()
    {
        return $this->hasMany('App\AutoModele','moto_marque_id','id');
    }
    public function Vehiculemodeles()
    {
        return $this->hasMany('App\AutoModele','vehicule_marque_id','id');
    }
    public function Remorquemodeles()
    {
        return $this->hasMany('App\AutoModele','remorque_marque_id','id');
    }
    public function Camionsmodeles()
    {
        return $this->hasMany('App\AutoModele','camion_marque_id','id');
    }
    public function Campingsmodeles()
    {
        return $this->hasMany('App\AutoModele','camping_marque_id','id');
    }
}
