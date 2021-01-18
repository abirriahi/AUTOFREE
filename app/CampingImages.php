<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampingImages extends Model
{
    protected  $table = "camping_images";

    protected $fillable = [
        'path',
        'camping_id',
    ];

    public function autooo()
    {
        return $this->belongsTo('App\Camping','camping_id','id');
    }

}
