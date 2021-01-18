<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculeImages extends Model
{
    protected  $table = "vehicule_images";

    protected $fillable = [
        'path',
        'vehicule_id',
    ];

    public function autooo()
    {
        return $this->belongsTo('App\Vehicule','vehicule_id','id');
    }

}
