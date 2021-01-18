<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected  $table = "autofreesliders";

    protected $fillable = [
        'slider','ok','	date_expiration'

    ];



}
