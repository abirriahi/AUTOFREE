<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoImages extends Model
{
    protected  $table = "autos_images";

    protected $fillable = [
        'path',
        'auto_id',
    ];

    public function autooo()
    {
        return $this->belongsTo('App\Auto','auto_id','id');
    }

}
