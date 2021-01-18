<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotoImages extends Model
{
    protected  $table = "moto_images";

    protected $fillable = [
        'path',
        'moto_id',
    ];

    public function auto()
    {
        return $this->belongsTo('App\Moto', 'moto_id');
    }

}
