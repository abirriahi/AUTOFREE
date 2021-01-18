<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected  $table = "magazine";


   protected $fillable = [
    'marque', 'modele', 'image', 'prix', 'publier',

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
