<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemorqueImages extends Model
{
    protected  $table = "remorque_images";

    protected $fillable = [
        'path',
        'remorque_id',
    ];

    public function autooo()
    {
        return $this->belongsTo('App\Remorque','remorque_id','id');
    }

}
