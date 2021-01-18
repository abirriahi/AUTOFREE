<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CamionImages extends Model
{
    protected  $table = "camion_images";

    protected $fillable = [
        'path',
        'camion_id',
    ];

    public function autooo()
    {
        return $this->belongsTo('App\Camion','camion_id','id');
    }

}
