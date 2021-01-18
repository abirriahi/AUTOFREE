<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PubH extends Model
{
    protected  $table = "pubh";

    protected $fillable = [
        'pub','ok', 'description'

    ];



}
