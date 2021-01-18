<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PubV extends Model
{
    protected  $table = "pubv";

    protected $fillable = [
        'pub','ok', 'description'

    ];



}
