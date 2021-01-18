<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected  $table = "autofreecomments";

    protected $fillable = [
        'name', 'email', 'comment','approved', 'auto_id','user_id',
    ];

    public function post()
    {
        return $this->belongsTo('App\Auto','auto_id','id');
    } public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

}
